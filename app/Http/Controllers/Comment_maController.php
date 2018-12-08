<?php

namespace App\Http\Controllers;
use App\Comment_ma;
use App\Monan;
use App\Users;
use Illuminate\Http\Request;

class Comment_maController extends Controller
{
    public function index($id)
    {

       $comments=Comment_ma::where('monan',$id)->get();
       $monan =Monan::where('_id',$id)->first();
        if($comments->isEmpty())
            return view('admin/CRUD_Comment_ma/comment_create',compact('monan','id'));
        else
            return view('admin/CRUD_Comment_ma/comment',compact('comments'));
    }

    public function create($id)
    {
        $monan =Monan::where('_id',$id)->first();
    
        return view('admin/CRUD_Comment_ma/comment_create',compact('monan','id'));
    }
    public function edit($id)
    {
        $comment = Comment_qa::find($id);
        return view('admin/CRUD_Comment_ma/comment_edit',compact('comment','id'));
    }
    public function store(Request $request)
    {
        $comment = new Comment_ma();
        $comment->noidung = $request->get('comment');
        $comment->monan = $request->get('monan');
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

