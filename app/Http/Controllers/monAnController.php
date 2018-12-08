<?php
namespace App\Http\Controllers;
use App\monan;
use App\quanan;
use Illuminate\Http\Request;

class monAnController extends Controller
{
    public function index($id)
    {
        $monans =Monan::where('quanan',$id)->get();
        
        return view('admin/CRUD_Dish/monAn',compact('monans'));
    }
    public function index1()
    {
        $monans =Monan::all();
       // $monans=Monan::find('5bd3cdc82eca6b3254003495');
        //echo $monans->Monan->name;exit();
        return view('admin/CRUD_Dish/monAn',compact('monans'));
    }
    public function create()
    {
        $quanan = quanan::all();
        return view('admin/CRUD_Dish/monan_create',compact('quanan'));
    }
    public function store(Request $request)
    {
        $monan = new Monan();
        $monan->quanan = $request->get('quanan');
        $monan->name = $request->get('name');
        $monan->moTa = $request->get('moTa');
        $monan->soLike = $request->get('like');
        $monan->price = $request->get('price');
        $monan->image = $request->get('image');
        $monan->save();
        return redirect('monan')->with('success', 'monan has been successfully added');
    }
     public function edit($id)
    {
        $monan = monan::find($id);
        return view('admin/CRUD_Dish/monan_edit',compact('monan','id'));
    }
     public function update(Request $request, $id)
    {
        $monan= monan::find($id);
        $monan->name = $request->get('name');
        $monan->moTa = $request->get('mota');
        $monan->price = $request->get('price');
        $monan->image = $request->get('image');
        $monan->save();
        return redirect()->route('monan', $monan->quanan)->with('success', 'Món ăn đã được cập nhật ');
    }
    public function delete($id)
    {
        $monan = Monan::find($id);
        $monan->delete();
        return redirect('monan')->with('success','Restaurant has been deleted');
    }
}

