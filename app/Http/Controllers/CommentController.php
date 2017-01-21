<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;
class CommentController extends Controller
{
    public function leaveComment(Request $request,$id)
    {

    	$new=new Comment;
    	$new->user_id=$_SESSION['user'];
    	$new->post_id=$id;
    	$new->content=$request->content;
    	$new->save();  
    	return back();
    }

    public function replyComment(Request $request, $id, $ci)
    {
        $new= new Comment;
        $new->user_id=$_SESSION['user'];
        $new->post_id=$id;
        $new->content=$request->content;
        $new->replied_id=$ci;
        $new->save();
        return back();
    }
}
