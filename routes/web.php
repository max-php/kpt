<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ABCDController;
use App\Http\Controllers\AbcdPlusController;
use App\Http\Controllers\Disput\DisputsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|



*/

Route::get('/', function () {
   
   
  return '<a href="/abcd">all</a><br/><br/>
  <a href="/abcd/formabcd">create ABCD</a><br/><br/>
 
  
  ';
});


  


//Route::get('abcd', [ABCDController::class, 'index']);




 Route::group(
        [
            'prefix' => 'abcd',
           
        ],
        function () {

 Route::get('/', [ABCDController::class, 'index'])->name('view.list.abcd');
 Route::post('/create', [ABCDController::class, 'create'])->name('create.form');
  Route::post('/store', [AbcdPlusController::class, 'Store'])->name('Store.AbcdPlus');
 Route::get('/formabcd', [ABCDController::class, 'AbcdForm']);
 Route::get('/{id}', [AbcdPlusController::class, 'Create'])->name('Create.form.abcdplus');
  Route::get('/disput/{id}', [DisputsController::class, 'Disput'])->name('disput');
    Route::post('/disput/store', [DisputsController::class, 'Store'])->name('Store.disput');
  
});


/*
Route::get('home', function () {
   
   
   return view('welcome');
});


//Route::get('/user', [User::class, 'us']);
Route::get('/user/{id}',[User::class, 'index']);

//

   Route::group(
        [
            'prefix' => '/',
            'as' => '/'
        ],
        function () {

 Route::get('/', [ControllerAbcd::class, 'index']);
 Route::get('/as', [ControllerAbcd::class, 'indexa']);
  
});
*/


