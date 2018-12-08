<?php
namespace App\Http\Controllers;
use App\Quanan;
use App\Address;
use App\province;
use App\street;
use App\district;
use App\ward;
use App\province_mongodb;
use App\street_mongodb;
use App\district_mongodb;
use App\ward_mongodb;

use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index($id)
    {
        $provinces = province::all();
        $quanans=Quanan::find($id);
        $diachi=Address::where('quanan',$id)->get();
        if($diachi->isEmpty())
            return view('admin/CRUD_Diachi/address_create',compact('quanans','provinces'));
        else
            return view('admin/CRUD_Diachi/address',compact('diachi'));
    }
    public function index_all()
    {
        $diachi=Address::all();
       //dd($diachi[0]->quanans->name);exit();
        return view('admin/CRUD_Diachi/address',compact('diachi'));
    }
    public function create($id)
    {
        $provinces = province::all();
        // $districts = district::all();
        // $streets = street::all();
        // $wards = ward::all();

        $quanans=Quanan::find($id);
        return view('admin/CRUD_Diachi/address_create',compact('quanans','provinces'));
    }
    public function store(Request $request)
    {
        $province_m = province_mongodb::where('id',(int)$request->province)->first();
        $district_m = district_mongodb::where('id',(int)$request->district)->first();
        $street_m = street_mongodb::where('id',(int)$request->street)->first();
        $ward_m = ward_mongodb::where('id',(int)$request->ward)->first();
        if(!$province_m && $request->province){
            $province = province::where('id',$request->province)->first();
            $province_add = new province_mongodb();
            $province_add->id = $province->id; 
            $province_add->name = $province->_name;
            $province_add->save();
        }
        if(!$district_m && $request->district){
            $district = district::where('id',$request->district)->first();
            $district_add=new district_mongodb();
            $district_add->id = $district->id; 
            $district_add->name = $district->_name;
            $district_add->save();            
        }
        if(!$street_m && $request->street){
            $street = street::where('id',$request->street)->first();
            $street_add=new street_mongodb();
            $street_add->id = $street->id; 
            $street_add->name = $street->_name;
            $street_add->save();            
        }
        
        if(!$ward_m && $request->ward){
            $ward = ward::where('id',$request->ward)->first();
            $ward_add=new ward_mongodb();
            $ward_add->id = $ward->id; 
            $ward_add->name = $ward->_name;
            $ward_add->save();            
        }
        
        $quanAn = new Address();
        $quanAn->quanan   = $request->get('quanan');
        $quanAn->province = (int)$request->get('province');
        $quanAn->district  = (int)$request->get('district');
        $quanAn->street  = (int)$request->get('street');
        $quanAn->ward  = (int)$request->get('ward');
        $quanAn->lat  = 0;
        $quanAn->lng  = 0;
        $quanAn->save();

       return redirect()->back()->with('success', 'Address has been successfully added');
    }
     public function edit($id)
    {
        $address = address::find($id);
        return view('admin/CRUD_Diachi/address_edit',compact('address','id'));
    }
     public function update(Request $request, $id)
    {
        $address= address::find($id);
       // dd($address);exit();
        $address->lat = $request->get('lat');
        $address->lng = $request->get('lng');
       
        $address->save();
        return redirect()->route('address', $address->quanans->_id)->with('success', 'Địa chỉ đã được cập nhật ');
    }
   public function delete($id)
    {
        $address= address::find($id);
        $address->delete();
        return redirect('address')->with('success','address has been deleted');
      
    }

}

