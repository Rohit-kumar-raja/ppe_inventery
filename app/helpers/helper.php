<?php

use App\Models\Permission;
use Illuminate\Support\Facades\Auth;

function check_permission($permission){
   return Permission::where('user_id',Auth::user()->id)->where('name',$permission)->exists();
}
function get_permission($permission,$user_id){
   return Permission::where('user_id',$user_id)->where('name',$permission)->exists();
}
