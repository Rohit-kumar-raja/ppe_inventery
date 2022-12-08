<?php

use App\Models\Permission;
use Illuminate\Support\Facades\Auth;

function check_permission($permission){
   return Permission::where('user_id',Auth::user()->id)->where('name',$permission)->exists();
}
