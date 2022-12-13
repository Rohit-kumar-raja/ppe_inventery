<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use App\Models\Employee;
use App\Models\Permission;
use App\Models\User;
use App\Models\Worker;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public $page_name = 'Admin Management';
    public function index()
    {
        // dd(auth()->user()->can('dashboard'));
        $all_admin = User::where('type', '!=', 'superadmin')->get();
        $types = Designation::where('status', 1)->get();
        $emp = Employee::where('status', 1)->get();
        return view('admin.index', [
            'admins' => $all_admin,
            'page' => $this->page_name,
            'types' => $types,
            'emps' => $emp
        ]);
    }

    public function status($id)
    {
        $status = User::find($id);
        if ($status->status == 1) {
            User::where('id', $id)->update(['status' => '0']);
            return redirect()->back()->with('status', 'Status Successfully Deactivated');
        } else {
            User::where('id', $id)->update(['status' => '1']);
            return redirect()->back()->with('status1', 'Status Successfully Activated');
        }
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $uesr_id =  User::insertGetId($request->except('_token', 'permission_name', 'password_confirmation'));
        User::where('id', $uesr_id)->update(['password' => Hash::make($request->password)]);
        if (sizeof($request->permission_name) > 0) {
            foreach ($request->permission_name as $permission) {
                Permission::insert([
                    'name' => $permission,
                    'url' => 'not given',
                    'user_id' => $uesr_id,
                    'created_at' => date('Y-m-d h:i:s')
                ]);
            }
        }
        return back();
    }


    public function edit($id)
    {
        $data = User::find($id);
        $types = Designation::where('status', 1)->get();
        $emp = Employee::where('status', 1)->get();
        $permission = Permission::where('user_id', $id)->get();
        return view('admin.edit', ['data' => $data, 'permission' => $permission,  'types' => $types, 'emps' => $emp, 'page' => $this->page_name]);
    }

    public function update(Request $request, $id)
    {


        $uesr_id = $request->id;
        if ($request->password != '' && $request->password_confirmation != '') {
            $request->validate([
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);

            User::where('id', $uesr_id)->update(['password' => Hash::make($request->password)]);
        }

        User::where('id', $uesr_id)->update($request->except('_token', 'permission_name', 'password_confirmation','user_id','password'));
        Permission::where('user_id', $uesr_id)->delete();

        if (sizeof($request->permission_name) > 0) {
            foreach ($request->permission_name as $permission) {
                Permission::insert([
                    'name' => $permission,
                    'url' => 'not given',
                    'user_id' => $uesr_id,
                    'created_at' => date('Y-m-d h:i:s')
                ]);
            }
        }

        return redirect()->route('admin')->with('update', $this->page_name . ' Updated Successfully !!! ');
    }

    public function destroy($id)
    {
        try {
            $companies = User::destroy($id);
        } catch (Exception $e) {
            return back()->with('delete',  'This Admin have Permissions So Please remove All permission for this Admin then delete this uesr ');
        }
        return back()->with('delete', $this->page_name . ' Deleted Successfully !!! ');
    }
}
