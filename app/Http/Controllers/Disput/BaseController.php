<?php

namespace App\Http\Controllers\Disput;
use  App\Http\Controllers\Controller;
use App\Services\Disput\Service;

class BaseController extends Controller
{
 
 protected $service;
 
    public function __construct(Service $service)
    {
        $this->service = $service;
    } 
  
  
  
}