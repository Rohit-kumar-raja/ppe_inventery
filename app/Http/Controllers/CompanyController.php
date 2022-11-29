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
        $company-> name = $request-> name;
        $company-> area = $request-> area;
        $company-> city = $request-> city;
        $company-> discrict = $request-> discrict;
        $company-> state	 = $request-> state;
        $company-> pincode = $request-> pincode;
        $company-> phone = $request-> phone;
        $company-> mobile = $request-> mobile;
        $company-> email = $request-> email;
        $company-> website = $request-> website;
        $company-> tin = $request-> tin;
        $company-> pan = $request-> pan;
        $company->save();
        return redirect('company/list');        
    }

    Public function edit($id){
        $companies = Company::where('id',$id)->first();
        return view('company.edit',['companies' => $companies]);
    }

    public function update(Request $request , $id){
       $companies = Company::where('id',$id)->first();
       $companies-> name = $request-> name;
       $companies-> area = $request-> area;
       $companies-> city = $request-> city;
       $companies-> discrict = $request-> discrict;
       $companies-> state	 = $request-> state;
       $companies-> pincode = $request-> pincode;
       $companies-> phone = $request-> phone;
       $companies-> mobile = $request-> mobile;
       $companies-> email = $request-> email;
       $companies-> website = $request-> website;
       $companies-> tin = $request-> tin;
       $companies-> pan = $request-> pan;
       $companies->save();
        return redirect('company/list');
    }

    public function destroy($id){
        $companies = Company::where('id',$id)->first();
        $companies->delete();
        return redirect('company/list');
    }
}
