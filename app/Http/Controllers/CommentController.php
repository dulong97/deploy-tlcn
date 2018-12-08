<?php

namespace App\Http\Controllers;
use App\Comment_qa;
use App\Quanan;
use App\Users;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index($id)
    {

       $comments=Comment_qa::where('quanan',$id)->get();
       $quanan =Quanan::where('_id',$id)->first();
        if($comments->isEmpty())
            return view('admin/CRUD_Comment/comment_create',compact('quanan','id'));
        else
            return view('admin/CRUD_Comment/comment',compact('comments'));
    }

    public function create($id)
    {
        $quanan =Quanan::where('_id',$id)->first();
    
        return view('admin/CRUD_Comment/comment_create',compact('quanan','id'));
    }
    public function edit($id)
    {
        $comment = Comment_qa::find($id);
        return view('admin/CRUD_Comment/comment_edit',compact('comment','id'));
    }
    public function store(Request $request)
    {
        $comment = new Comment_qa();
        $comment->noidung = $request->get('comment');
        $comment->quanan = $request->get('quanan');
        $comment->user = $request->get('user');
        $comment->save();
        return redirect()->back()->with('success', 'Comment has been successfully added');
    }
   
    
    public function delete($id)
    {
        $comment = Comment_qa::find($id);
        $comment->delete();
        return redirect('comment')->with('success','Comment has been deleted');
    }
}

