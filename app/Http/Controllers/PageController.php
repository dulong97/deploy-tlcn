<?php

namespace App\Http\Controllers;
use App\Users;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
       // $url = action([PageController::class, 'index']);
       // $url = action([PageController::class, 'update'], ['id' => 1]);

       //z dd($url);exit();
        $users=Users::all();
        return view('admin/CRUD_User/user',compact('users'));
    }
    public function create()
    {
        return view('admin/CRUD_User/user_create');
    }
    public function store(Request $request)
    {
        $user = new Users();
        request()->validate([
            'email' => 'required|max:255',
            'password' => 'required',
        ]);

        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->gender = $request->get('gender');
        $user->cmnd = $request->get('cmnd');
        $user->name = $request->get('name');
        $user->save();
        return redirect('user')->with('success', 'User has been successfully added');
    }
    public function edit($id)
    {
        $user = Users::find($id);
        return view('admin/CRUD_User/user_edit',compact('user','id'));
    }
    public function update(Request $request, $id)
    {
        $user= Users::find($id);
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->gender = $request->get('gender');
        $user->cmnd = $request->get('cmnd');
        $user->name = $request->get('name');
        $user->save();
        return redirect('user')->with('success', 'User has been successfully update');
    }
    public function delete($id)
    {
        $user = Users::find($id);
        $user->delete();
        return redirect('user')->with('success','User has been deleted');
    }
}

