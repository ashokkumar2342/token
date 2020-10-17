<?php

namespace App\Http\Controllers\Admin;

use App\Helper\MyFuncs;
use App\Http\Controllers\Admin\PanchayatSamiti;
use App\Http\Controllers\Controller;
use App\Model\Setting;
use App\Model\VisitorDetails;
use Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PDF; 
class MasterController extends Controller
{
    public function Settings()
    { 
        try {   
            return view('admin.master.settings.index');
        } catch (Exception $e) {

        }

    }
    public function SettingsStore(Request $request,$id=null)
    {
      try {  
        $rules=[
            'mandir_name' => 'required', 
            'mandir_address' => 'required', 
            'authority_name' => 'required', 
            'batch_time' => 'required', 
            'batch_strength' => 'required', 
 
        ];

        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $response=array();
            $response["status"]=0;
            $response["msg"]=$errors[0];
        return response()->json($response);// response as json
       }
       else {
       $Setting=Setting::firstOrNew(['id'=>$id]);
       $Setting->mandir_name=$request->mandir_name;
       $Setting->mandir_address=$request->mandir_address;
       $Setting->author_name=$request->authority_name; 
       $Setting->batch_time=$request->batch_time; 
       $Setting->batch_time=$request->batch_time; 
       $Setting->batch_strength=$request->batch_strength; 
       $Setting->save();
       $response=['status'=>1,'msg'=>'Submit Successfully'];
       return response()->json($response);
       }
     } catch (Exception $e) { 
     }
    }

//----------------------VisitorDetails     

     
    public function VisitorDetails()
    { 
        try {   
          $VisitorDetails =VisitorDetails::get();
            return view('admin.master.visitorDetails.index',compact('VisitorDetails'));
        } catch (Exception $e) {

        }

    }
    public function VisitorDetailsStore(Request $request,$id=null)
    {  
      try {  
        $rules=[
            'name' => 'required', 
            'address' => 'required', 
            'mobile_no' => 'required', 
            'total_person' => 'required', 
        ];

        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $response=array();
            $response["status"]=0;
            $response["msg"]=$errors[0];
        return response()->json($response);// response as json
       }
       else {
       $VisitorDetails=VisitorDetails::firstOrNew(['id'=>$id]);
       $VisitorDetails->name=$request->name;
       $VisitorDetails->address=$request->address;
       $VisitorDetails->mobile_no=$request->mobile_no; 
       $VisitorDetails->total_person=$request->total_person; 
       $VisitorDetails->save();
       $response=['status'=>1,'msg'=>'Submit Successfully'];
       return response()->json($response);
       }
     } catch (Exception $e) { 
     }
    } 
//-----------------Batches-----------Batches--------------Batches------
    public function Batches()
    { 
        try {   
            return view('admin.master.batches.index');
        } catch (Exception $e) {

        }

    }
    public function BatchesStore(Request $request,$id=null)
    {  return $request;
      try {  
        $rules=[
            'for' => 'required', 
            'from_time' => 'required', 
            'to_time' => 'required',  
        ];

        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $response=array();
            $response["status"]=0;
            $response["msg"]=$errors[0];
        return response()->json($response);// response as json
       }
       else {
       $VisitorDetails=new Batche();
       $VisitorDetails->batch_no=$request->batch_no;
       $VisitorDetails->for_date=$request->for_date;
       $VisitorDetails->for_time=$request->form_time; 
       $VisitorDetails->total_person=$request->total_person; 
       $VisitorDetails->batch_strength=$request->batch_strength; 
       $VisitorDetails->save();
       $response=['status'=>1,'msg'=>'Submit Successfully'];
       return response()->json($response);
       }
     } catch (Exception $e) { 
     }
    }
}
