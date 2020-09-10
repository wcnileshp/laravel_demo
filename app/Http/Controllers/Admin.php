<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\user;

class Admin extends Controller
{
	public function __construct(){
		
	}
	public function login(){
		 if(!empty(session()->get('userlogin'))){
            return redirect('/admin');
        }else{
        	return view('Admin.login',[ "msg" => '']);
        }
	}
    public function loginsubmit(Request $request){

    	$val = user::select('user_id')->where(
			array(
				array('email','=',$request->email),
				array('password','=',$request->password),
				array('role','=','admin')
			)
		)->get();
    	if(count($val) > 0 ){
    		$user_id = $val[0]->user_id;
    		$request->session()->put('userlogin',$user_id);
    		return redirect('/admin');
    	}else{
    		return view('admin.login',[ "msg" => 'Please enter vaild data']);
    	}
    }
    public function logout(){
    	Session::forget('userlogin');  
	    return redirect('/admin');
    }
    public function dashboard(){
    	return view('admin.dashboard');
    }

    public function adduser(){
    	return view('admin.adduser');
    }
}	
