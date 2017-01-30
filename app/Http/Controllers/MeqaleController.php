<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Meqale;
use App\Istifadeci;
use App\Tag;

class MeqaleController extends Controller
{
    public function index()
    {
    	$posts=Meqale::orderBy('created_at','desc')->get();
    	return view('pages.bloghome',compact('posts'));
    }

    public function banPost($id)
    {
    	$post=Meqale::find($id);
    	$post->status='0';
    	$post->save();
    	return back();
    }

    public function permitPost($id)
    {
		$post=Meqale::find($id);
    	$post->status='1';
    	$post->save();
    	return back();
    }

    public function showPost($id)
    {
    	$post=Meqale::find($id);
    	$muellif=Istifadeci::find($post->hekim_id);
    	return view('admin.user',compact('post','muellif'));
    }

    public function tags()
    {
        $tags=Tag::all();
        return view('admin.tags',compact('tags'));
    }

    public function addTag(Request $request)
    {
        $this->validate($request,[
                'name'=>'required',
                'about'=>'required',
                ]);
        $new=new Tag;
        $new->name=$request->name;
        $new->about=$request->about;
        $new->save();
        
        return back();
    }
}
