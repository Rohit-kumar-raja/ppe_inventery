<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public $page_name = 'Company';
    public function index()
    {
        return view('company.index', ['company' =>  Company::get(),'page'=>$this->page_name]);
    }

    public function save(Request $request)
    {
        Company::insert($request->except('_token'));
        return redirect('company/list')->with('store',$this->page_name.' Added Successfully !!! ');
    }

    public function edit($id)
    {
        $companies = Company::where('id', $id)->first();
        return view('company.edit', ['companies' => $companies,'page'=>$this->page_name]);
    }

    public function update(Request $request, $id)
    {
        $companies = Company::where('id', $id)->first();
        $companies->name = $request->name;
        $companies->area = $request->area;
        $companies->city = $request->city;
        $companies->discrict = $request->discrict;
        $companies->state  = $request->state;
        $companies->pincode = $request->pincode;
        $companies->phone = $request->phone;
        $companies->mobile = $request->mobile;
        $companies->email = $request->email;
        $companies->website = $request->website;
        $companies->tin = $request->tin;
        $companies->pan = $request->pan;
        $companies->save();
        return redirect('company/list')->with('update',$this->page_name.' Updated Successfully !!! ');
    }

    public function destroy($id)
    {
        $companies = Company::where('id', $id)->first();
        $companies->delete();
        return redirect('company/list')->with('delete',$this->page_name.' Deleted Successfully !!! ');
    }
}
