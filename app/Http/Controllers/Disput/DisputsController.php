<?php

namespace App\Http\Controllers\Disput;

use Illuminate\Http\Request;
use App\Http\Controllers\Disput\BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Disput;
use App\Http\Requests\Disput\StoreRequest;


class DisputsController extends BaseController
{
	
	
   public function Disput($id){
			
return view('disput.index',['disput' => Disput::where('abcd_id',$id)->get(),'id'=>$id]);
        
}




  public function Store(StoreRequest $request){
  	
  	
   $this->service->Store($request); 	
 	
  return back();

}




}
