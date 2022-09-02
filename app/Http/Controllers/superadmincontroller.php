<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\admin;
use Illuminate\support\facades\Redirect;
use session;
session_start();

class superadmincontroller extends Controller
{
    function dashboard(){
        $this->adminauthcheck();
        return view('admin.dashboard');
    }
    function logout(){
        session()->flush();
        return redirect::to('/admins');
    }
    function adminauthcheck(){
        $admin_id=session()->get('admin_id');
        if($admin_id){
            return;
        }else{
            return Redirect::to('/admins')->send();
        }
    }
}
