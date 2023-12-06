<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\abcd;

class AbcdPlus extends Model
{
	
	 
      protected $table = 'abcdplus';
     protected $guarded = [];
     
     
  
	
	
	  public function abcd()
    {
        return $this->belongsTo(abcd::class, 'id');
       
    }
    
   
	
	
}
