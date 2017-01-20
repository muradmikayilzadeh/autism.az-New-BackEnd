<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Istifadeci;


class userController extends Controller
{
    public function register(Request $request)
    {
    	$this->validate($request,[
                'name'=>'required',
                'surname'=>'required',
                'email'=>'required',
                'password'=>'required',

                ]);
    	if(!Istifadeci::where('email',$request->email)->first()){
    		$new=new Istifadeci;
	    	$new->name=$request->name;
	    	$new->surname=$request->surname;
	    	$new->email=$request->email;
	    	$new->password=$request->password;
            $new->gender=$request->gender;
	    	$new->user_type='0';
	    	if($request->gender==0){
	    		$new->avatar='assets/images/avatar/male.jpg';
	    	}else{
	    		$new->avatar='assets/images/avatar/female.jpg';
	    	}
            $new->about=$request->about;
	    	$new->save();
	    	return back()->with('success','Uğurla qeydiyyatdan keçdiniz! Solda yerləşən qırmızı simgəyə çıqqıldadaraq sistemə daxil ola bilərsiniz!');
    	}else{
    		return back()->with('unsuccess','E-poçt ünvanı ilə artıq qeydiyyatdan keçilib! Qeydiyyat uğursuzdur.');
    	}
    }

    public function login(Request $request)
    {

    	$user=Istifadeci::where([['email',$request->email],['password',$request->password]])->first();
    	if(is_null($user)){
            return back()->with('false','E-poçt və ya şifrə səhvdir!');
    	}else{
            $_SESSION['user']=$user->id;
            return back()->with('true','Portala uğurla daxil oldunuz!');
    	}
    }

    public function logout()
    {
        session_destroy();
        return redirect('/');
    }


    public function myProfile()
    {
        $user=Istifadeci::find($_SESSION['user']);
        return view('pages.myprofile',compact('user'));
    }


    public function saveChanges(Request $request)
    {
        $this->validate($request,[
                'name'=>'required',
                'surname'=>'required',
                'password'=>'required',

                ]);
        $user=Istifadeci::find($_SESSION['user']);
        $user->name=$request->name;
        $user->surname=$request->surname;
        $user->password=$request->password;   
        $user->about=$request->about;   

        if($request->hasFile('photo')){
            $file=$request->file('photo');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move('assets/images/avatar',$filename);
            $path='assets/images/avatar/'.$filename;
            $user->avatar=$path;
        }

        $user->save();    

        return back()->with('changed','Məlumatlarınız uğurla yeniləndi!');
    }
}
