<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Istifadeci;
use App\Meqale;
use App\Comment;
use App\Like;
use App\Tag;
class userController extends Controller
{

    public function sendMail(Request $request)
    {
      $to      = 'm.murad@code.edu.az';
      $subject = $request->subject;
      $message = $request->content;
      $headers = 'From: '.$request->email. "\r\n" .
          'Reply-To: '.$request->email. "\r\n" .
          'X-Mailer: PHP/' . phpversion();

      var_dump(mail($to, $subject, $message, $headers));
      return back();
    }

    public function index()
    {
      $posts=Meqale::orderBy('created_at','desc')->get();
      return view('pages.index',compact('posts'));
    }


    public function blogHome()
    {
      if(isset($_SESSION['user_type'])){
        $posts=Meqale::orderBy('created_at','desc')->get();
        $tags=Tag::all();
        return view('pages.bloghome',compact('posts','tags'));
      }else{
        return back()->with('login','Məqalələri görmək üçün qeydiyyatdan keçin. Əgər artıq hesabınız varsa, solda yerləşən qırmızı simgəyə çıqqıldadaraq portala daxil olun');
      }
    }


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
            if($user->user_type=="-1"){
                return back()->with('banned','İstifadəçi sistemdən uzaqlaşdırılıb!');
            }else{
                $_SESSION['user']=$user->id;
                $_SESSION['user_type']=$user->user_type;

                return back()->with('true','Portala uğurla daxil oldunuz!');
            }
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
        $tags=Tag::all();
        $posts=Meqale::where('hekim_id',$_SESSION['user'])->orderBy('created_at','desc')->get();
        return view('pages.myprofile',compact('user','posts','tags'));
    }


    public function profile($id)
    {
        $user=Istifadeci::find($id);
        $tags=Tag::all();
        $posts=Meqale::where('hekim_id',$id)->orderBy('created_at','desc')->get();
        return view('pages.profile',compact('user','posts','tags'));
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

    // ----------------Meqale functionlar-----------------------------
    public function meqaleYaz(Request $request)
    {

      $this->validate($request,[
                'title'=>'required',
                'content'=>'required',
                ]);
       $new=new Meqale;

       $new->title=$request->title;
       $new->content=$request->content;
       $new->hekim_id=$_SESSION['user'];

       if($request->hasFile('picture')){
           $file=$request->file('picture');
           $filename=time().'.'.$file->getClientOriginalExtension();
           $file->move('assets/images/posts',$filename);
           $path='assets/images/posts/'.$filename;
           $new->img=$path;
       }

       if($request->hasFile('video')){
           $file=$request->file('video');
           $filename=time().'.'.$file->getClientOriginalExtension();
           $file->move('assets/videos/',$filename);
           $path='assets/videos/'.$filename;
           $new->video=$path;
       }
       $new->status='1';
       $new->tag=$request->tag;
       $new->save();

       return back();

    }

    public function showPost($id)
    {
      $post=Meqale::find($id);
      $comments=Comment::where('post_id',$id)->orderBy('created_at','desc')->get();
      $tags=Tag::all();
      $likes=Like::where('post_id',$id)->get();
      return view('pages.blogpost',compact('post','comments','likes','tags'));
    }

    public function likePost($id)
    {

        if(!Like::where([['user_id',$_SESSION['user']],['post_id',$id]])->first()){
            $new=new Like;
            $new->user_id=$_SESSION['user'];
            $new->post_id=$id;
            $new->save();
            return back();
          }else{
            return back();
          }

    }
     
}
