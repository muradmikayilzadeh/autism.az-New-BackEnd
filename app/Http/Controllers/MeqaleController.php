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
}
