<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\admin;
class adminController extends Controller
{
 	public function login(Request $request)
 	{
 		$this->validate($request,[
                'email'=>'required',
                'password'=>'required',

                ]);
 		$admin=admin::where([['email',$request->email],['password',$request->password]])->first();
 		if(is_null($admin)){
 			return back()->with('wrong','E-poçt və ya şifrə səhvdir!');
 		}else{
 			$_SESSION['admin']=$admin->id;
           	return view('admin.dashboard');
 		}
 		
 	}
}
