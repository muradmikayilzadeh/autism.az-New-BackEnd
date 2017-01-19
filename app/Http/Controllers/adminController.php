<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\admin;
use App\istifadeci;
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
           	return redirect('/mlgrouppanel');
 		}
 		
 	}
 	// ----------------------ADMIN PANEL FUNCTIONLARI----------------------------------
 	public function logout()
 	{
 		session_destroy();
        return redirect('/mlgroup');
 	}


 	public function users()
 	{	
 		$users=Istifadeci::all();
 		return view('admin.users',compact('users'));
 	}

 	public function doctors()
 	{
 		return view('admin.doctors');
 	}

 	public function posts()
 	{
 		return view('admin.doctors');
 	}

 	public function changeStatus($id)
 	{
 		$user=Istifadeci::find($id);
 		$user->user_type='1';
 		$user->save();
 		return back();
 	}

 	public function banUser($id)
 	{
 		$user=Istifadeci::find($id);
 		$user->user_type='-1';
 		$user->save();
 		return back();
 	}

 	public function permitUser($id)
 	{
 		$user=Istifadeci::find($id);
 		$user->user_type='0';
 		$user->save();
 		return back();
 	}
}
