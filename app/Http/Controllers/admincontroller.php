<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\support\facades\Redirect;
use session;
session_start();

class admincontroller extends Controller
{
    function index(){
      return view('admin.admin_login');
    }

    function show_dashboard(Request $request){
        $admin_email=$request->email;
        $admin_password=md5($request->password);
        $result=admin::where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($result){
            session()->put('admin_id',$result->admin_id);
            session()->put('admin_name',$result->admin_name);
            return redirect::to('/dashboard');
        }else{
            session()->put('message','Email or Password not matched !');
            return redirect::to('/admins');
        }
    }
}
