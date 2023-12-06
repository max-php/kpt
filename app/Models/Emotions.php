<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class Emotions extends Model
{
     protected $table = 'emotion';
     protected $guarded = [];
     
     
     
    static function rules() {return [
        'name' => ['required', 'string'],
      
    ];
	}
	
	 static function GetName($ids)
     {
    
	$name= static::find(explode(',',$ids));
	
	 return $name;	
	 }
}
