<?php

namespace App\Http\Controllers;
use App\Quanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class quanAnController extends Controller
{
    public function index()
    {
        $quanans=Quanan::all();
       // dd($quanans[0]->monan[0]['name']);
        return view('admin/CRUD_Restaurant/quanAn',compact('quanans'));
    }
    public function create()
    {
        return view('admin/CRUD_Restaurant/quanAn_create');
    }
    public function store(Request $request)
    {
        // print_r(Input::all());
        $quanAn = new Quanan();
        $quanAn->name   = $request->get('name');
        $quanAn->soLike = $request->get('like');
        $quanAn->vote1  = $request->get('vote1');
        $quanAn->vote2  = $request->get('vote2');
        $quanAn->vote3  = $request->get('vote3');
        $quanAn->vote4  = $request->get('vote4');
        $quanAn->vote5  = $request->get('vote5');
        $quanAn->save();
        return redirect('quanan')->with('success', 'QuanAn has been successfully added');
    }
   
     public function edit($id)
    {
        $quanan = quanan::find($id);
        return view('admin/CRUD_Restaurant/quanAn_edit',compact('quanan','id'));
    }
     public function update(Request $request, $id)
    {
        $quanan= quanan::find($id);
        $quanan->name = $request->get('name');
        $quanan->image = $request->get('image');
        $quanan->save();
        return redirect()->back();
    }

    public function delete($id)
    {
        $quanAn = Quanan::find($id);
        $quanAn->delete();
        return redirect('quanan')->with('success','Restaurant has been deleted');
    }
}

