<?php 
namespace App\Services\Disput;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Disput;

 
class Service
{
	
	
	public function Store($request){
  	

  
  $arr=$request->all();
  
  unset($arr['id'],$arr['_token']);
  


Disput::updateOrCreate(
    [
       'abcd_id'   =>$request->id,
    ],
    $arr
);


}
	
//================================

  
  
  
}