<?php

namespace App\Http\Controllers\Admin;
use App\TransportCost;
use App\TransportType;
use App\Location;
use App\TransportCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransportCostController extends Controller
{
    public function index(){
        $transcosts = TransportCost::all();
        $transtypes = TransportType::all();
        $locations = Location::all();
        $transcategories = TransportCategory::all();
        return view('admin.transport.transportCost.transportCost',compact('transcosts','transtypes','locations','transcategories'));
    }
    public function create(){
        $transtypes = TransportType::all();
        $locations = Location::all();
        $transcategories = TransportCategory::all();
        return view('admin.transport.transportCost.create-transportCost',compact('transtypes','locations','transcategories'));
    }
    public function store(Request $request){
        $transcost=new TransportCost();
        $transcost->transport_type_id=$request->transport_type_id;
        $transcost->location_id=$request->location_id;
        $transcost->transport_category_id=$request->transport_category_id;
        $transcost->from=$request->from;
        $transcost->to=$request->to;
        $transcost->price=$request->price;
        $transcost->save();
        return redirect()->to('admin/all-transcost');
    }
    public function update_page($id){
        $transcost=TransportCost::find($id);
        $transtypes = TransportType::all();
        $locations = Location::all();
        $transcategories = TransportCategory::all();
        return view('admin.transport.transportCost.update-transportCost',compact('transcost','transtypes','locations','transcategories'));
    }
    public function update(Request $request){
        $transcost=TransportCost::find($request->id);
        $transcost->transport_type_id=$request->transport_type_id;
        $transcost->location_id=$request->location_id;
        $transcost->transport_category_id=$request->transport_category_id;
        $transcost->from=$request->from;
        $transcost->to=$request->to;
        $transcost->price=$request->price;
        $transcost->save();
        return redirect()->to('admin/all-transcost');
      }
    public function delete($id){
        $transcost=TransportCost::find($id);
        $transcost->delete();
        return redirect()->back(); 
    }
}
