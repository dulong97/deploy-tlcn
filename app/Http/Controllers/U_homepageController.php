<?php

namespace App\Http\Controllers;
use App\quanan;
use App\monan;
use App\Address;
use App\province;
use App\street;
use App\district;
use App\ward;
use App\province_mongodb;
use App\street_mongodb;
use App\district_mongodb;
use App\ward_mongodb;
use Session;


use Illuminate\Http\Request;

class U_homepageController extends Controller
{
	
function gettrangchu()
	{
		$quanans = quanan::all();
		$monans = monan::all();
		$provinces = province::all();
		$streets = street::all();
		$districts = district::all();
		$wards = ward::all();
	return view('index',compact('quanans','monans','provinces','districts','streets','wards'));
	}

function lienhe()
	{
		$provinces = province::all();
		$streets = street::all();
		$districts = district::all();
		$wards = ward::all();
		return view('lienhe',compact('provinces','districts','streets','wards'));
	}

function quanan($id)
	{
		$address = address::where('quanan',$id)->first();
		$quanan = quanan::find($id);
		$monans = monan::Where('quanan',$id)->get();
		if($monans->isEmpty()){
			$message = "Quán này chưa up món ăn";
			dd($message);exit();

			return view('quanan',compact('quanan','address','message'));
		}
		//dd($quanan);exit();
		else
		return view('quanan',compact('quanan','address','monans'));
	}

function getTimkiem(Request $req)
	{
		if($req->street && $req->ward){
			$addresses = address::where('province',(int)$req->province)->where('district',(int)$req->district)->orWhere(function($query)use ($req)
    {
        $query->where('street', '=', (int)$req->street)
              ->orWhere('ward',(int)$req->ward);
    })->get();
				
		}
		elseif($req->ward){
				$addresses = address::where('province',(int)$req->province)->where('district',(int)$req->district)
				->where('ward',(int)$req->ward)->get();
			}
		elseif($req->street){
				$addresses = address::where('province',(int)$req->province)->where('district',(int)$req->district)
				->where('street',(int)$req->street)->get();
			}

		elseif($req->district){
				$addresses = address::where('province',(int)$req->province)->where('district',(int)$req->district)->get();
			}
		else
				$addresses = address::where('province',(int)$req->province)->get();

		$provinces = province::all();
		$streets = street::all();
		$districts = district::all();
		$wards = ward::all();
		if($addresses->isEmpty()){
			$message = "Không tìm thấy quán chay nào ở địa chỉ này .";
			return view('timkiem',compact('message','addresses','provinces','districts','streets','wards'));
		}
		else
			return view('timkiem',compact('addresses','provinces','districts','streets','wards'));

	}
								// Lấy dữ liệu địa chỉ đỗ ra seclect
						function getdistrict(Request $req)
						{

							$districts = district::where('_province_id',(int)$req->province_id)->get();
					        Session::put('province_id',$districts[0]);
								return (response()->json($districts));
						}
						function getstreet(Request $req)
						{
							$street = street::where('_province_id','=',Session('province_id')->_province_id)
								->where('_district_id','=',(int)$req->district_id)->get();
							return (response()->json($street));
						}
						function getward(Request $req)
						{
							$ward = ward::where('_province_id','=',Session('province_id')->_province_id)
								->where('_district_id','=',(int)$req->district_id)->get();
							return (response()->json($ward));
						}
							// Lấy dữ liệu địa chỉ đỗ ra seclect


function postTimkiem(Request $req)
	{
		return $this->getTimkiem($req);

	}
	function addQuanan(Request $req)
	{
		$quanAn = new Quanan();
        $quanAn->name   = $req->get('tenquanan');
		$quanAn->soLike = 0;
        $quanAn->vote1  = 0;
        $quanAn->vote2  = 0;
        $quanAn->vote3  = 0;
        $quanAn->vote4  = 0;
        $quanAn->vote5  = 0;
        $quanAn->save();
        Session::put('idquanan',$quanAn->id);
        return (response()->json($req->tenquanan));
		//return view('lienhe');
	}
	function addQuananAddress(Request $request)
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
        
        $quanAn_address = new Address();
        $quanAn_address->quanan   = Session('idquanan');
        $quanAn_address->province = (int)$request->get('province');
        $quanAn_address->district  = (int)$request->get('district');
        $quanAn_address->street  = (int)$request->get('street');
        $quanAn_address->ward  = (int)$request->get('ward');
        $quanAn_address->lat  = 0;
        $quanAn_address->lng  = 0;
        // dd($request->get('idquanan'));exit();
        $quanAn_address->save();
	}
	function map()
	{
		$quanans = quanan::all();
		//dd($quanans[0]->address[0]->lat);exit();
	return view('map',compact('quanans'));
	}
}
