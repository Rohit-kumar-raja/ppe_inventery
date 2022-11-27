<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    Public function index(){        
        return view('company.index',['company' =>  Company::get()]);
    }

    Public function save(Request $request){
        $company = new Company ;
        $company->company_name = $request->company_name;
        $company->company_area = $request->company_area;
        $company->company_city = $request->company_city;
        $company->company_discrict = $request->company_discrict;
        $company->company_state	 = $request->company_state;
        $company->company_pincode = $request->company_pincode;
        $company->company_phone = $request->company_phone;
        $company->company_mobile = $request->company_mobile;
        $company->company_email = $request->company_email;
        $company->company_website = $request->company_website;
        $company->company_tin = $request->company_tin;
        $company->company_pan = $request->company_pan;
        $company->save();
        return redirect('company/list');        
    }

    Public function edit($id){
        $companies = Company::where('id',$id)->first();
        return view('company.edit',['companies' => $companies]);
    }

    public function update(Request $request , $id){
       $companies = Company::where('id',$id)->first();
       $companies->company_name = $request->company_name;
       $companies->company_area = $request->company_area;
       $companies->company_city = $request->company_city;
       $companies->company_discrict = $request->company_discrict;
       $companies->company_state	 = $request->company_state;
       $companies->company_pincode = $request->company_pincode;
       $companies->company_phone = $request->company_phone;
       $companies->company_mobile = $request->company_mobile;
       $companies->company_email = $request->company_email;
       $companies->company_website = $request->company_website;
       $companies->company_tin = $request->company_tin;
       $companies->company_pan = $request->company_pan;
       $companies->save();
        return redirect('company/list');
    }

    public function destroy($id){
        $companies = Company::where('id',$id)->first();
        $companies->delete();
        return redirect('company/list');
    }
}
