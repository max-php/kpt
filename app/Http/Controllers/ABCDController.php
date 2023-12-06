<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\abcd;
use Illuminate\Support\Facades\Validator;

class ABCDController extends Controller
{
	
	
	
//========================================	
public function index(){
	

$users=abcd::ViewAll();
		
return view('abcd.index',['data' => $users ]);

         
}


//===========================================

public function create(Request $request){

		$request->merge([
        'emotion' => implode(',', (array) $request->post('emotion'))
    ]);
	
$this->validate($request,abcd::rules());



abcd::CreateABCD($request->all());

return redirect(route('view.list.abcd'));


	
}


public function ViewItemAbcd($id){
	
	$itemData=abcd::find($id); 
	
	return view('abcd.itemAbcd',['data' => $itemData]);
	

	
//return($id);	
	
}

public function AbcdForm(Request $request){
	
	  return view('abcd.createformabcd');
	
}






}
