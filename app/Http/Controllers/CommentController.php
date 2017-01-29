<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;
class CommentController extends Controller
{
    public function leaveComment(Request $request,$id)
    {

        $this->validate($request,[
                'content'=>'required',
                ]);
    	$new=new Comment;
    	$new->user_id=$_SESSION['user'];
    	$new->post_id=$id;
    	$new->content=$request->content;
    	$new->save();  
    	return back();
    }

    public function replyComment(Request $request, $id, $ci)
    {
        $this->validate($request,[
                'content'=>'required',
                ]);
        $new= new Comment;
        $new->user_id=$_SESSION['user'];
        $new->post_id=$id;
        $new->content=$request->content;
        $new->replied_id=$ci;
        $new->save();
        return back();
    }


    public function deleteComment($id)
    {
       $replieds=Comment::where('replied_id',$id)->get();
       foreach($replieds as $replied){
            $replied->delete();
       }

       $comment=Comment::find($id);
       $comment->delete();
       return back();
    }
}
