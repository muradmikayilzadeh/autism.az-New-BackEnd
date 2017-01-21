<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;
class CommentController extends Controller
{
    public function leaveComment($id,$comment)
    {

    	$new=new Comment;
    	$new->user_id=$_SESSION['user'];
    	$new->post_id=$id;
    	$new->content=$comment;
    	$new->save();
    	return back();
    }
}
