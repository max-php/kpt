<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbcdPlus;
use App\Models\abcd;
use App\Http\Requests\AbcdPlus\StoreRequest;

class AbcdPlusController extends Controller
{


	
public function Store(StoreRequest $request)
{


 AbcdPlus::updateOrCreate(
    [
       'abcd_id'   =>$request->id,
    ],
    [
    'AlternativKopingMisli' => $request->ao,
    'Vivod' => $request->v,
    'target' => $request->celi
  
    
])->save();

return redirect(route('view.list.abcd'));





	}
	
	

public function Create($id){
	
	$itemData=abcd::find($id); 
	
	
	return view('abcd.itemAbcd',['data' => $itemData]);
	

	
//return($id);	
	
}


}
