<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Meqale;

class MeqaleController extends Controller
{
    public function index()
    {
    	$posts=Meqale::all();
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
}
