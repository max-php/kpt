<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\AbcdPlus;

class abcd extends Model
{
     protected $table = 'abcd';
     protected $guarded = [];
     
     
     
    static function rules() {return [
        'a' =>  'nullable|string',
        'b' => ['required', 'string'],
        'c' => 'nullable|string',
        'd' => 'nullable|string',
        'emotion' => 'nullable|string',
    ];
	}
  
     
     
     static function ViewAll()
     {
	 return static::all();	
	 	
	 }
	 
	 
	 
	static  function CreateABCD( $data)
     {  
           
    static::create([
    
    'A' => $data['a'],
    'B' => $data['b'],
    'C' => $data['c'],
    'D' => $data['d'],
    'emotions' => $data['emotion'],
    
])->save();

	 	
	 }
	 
	public function AbcdPlu()
    {
        return $this->hasMany(AbcdPlus::class);
    } 
 
     
}
