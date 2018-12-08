<?php

namespace App\Http\Controllers;
use App\product;
use App\producttype;
use Illuminate\Http\Request;

class ControllerPage extends Controller
{
    public function index()
    {
    	$products = product::all();
    	$productT = producttype::all();
            // ->join('producttype', 'product.masp', '=', 'producttype.maLoai')
            // ->select('masp', 'tenLoai', "tensp", 'price','unit','price','soluong')
            // ->get();
        return view('index',['products'=>$products,'productT'=>$productT]);
    }
    public function TypePage()
    {
    	$products = producttype::all();
            // ->join('producttype', 'product.masp', '=', 'producttype.maLoai')
            // ->select('masp', 'tenLoai', "tensp", 'price','unit','price','soluong')
            // ->get();
        return view('productType',['products'=>$products]);
    }
    public function create()
    {
        return view('createPage');
    }
    public function store(Request $request)
    {
        $product = new product();
        $product->tensp = $request->get('tensp');
        $product->unit = $request->get('unit');
        $product->soluong = $request->get('soluong');
        $product->price = $request->get('price');
        $product->maloaisp = $request->get('maLoai');
        $product->save();
        return redirect('/')->with('success', 'Sản phẩm đã được thêm vào');
    }
    public function edit($id)
    {
        $product = product::find($id);
        return view('updatePage',compact('product','id'));
    }
    public function update(Request $request, $id)
    {
        //$product =product::where('masp',$id)->first();
        $product =product::find($id);
        $product->tensp = $request->get('tensp');
        $product->unit = $request->get('unit');
        $product->soluong = $request->get('soluong');
        $product->price = $request->get('price');
        $product->maloaisp = $request->get('maLoai');
        $product->save();
        return redirect('/')->with('success', 'Sản phẩm đã được cập nhật');
    }
    public function delete($id)
    {
        $product = product::find($id);
        $product->delete();
        return redirect('/')->with('success','Sản phẩm đã xóa');
    }
}
