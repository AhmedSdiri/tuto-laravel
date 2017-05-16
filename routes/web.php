<?php

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
use \Illuminate\Support\Facades\Request;
use App\Http\Controllers\PageController;

  /*Route::get('salut/{slug}-{id}', ['as' => 'salut', function ($slug, $id) {
    //return "Slug : $slug, ID : $id";
      return "Lien : ". route('salut'=> $slug, 'id' => id);
}])->where('slug', '[a-z0-9]\-]+')->where('id', '[0-9]+');
//dd($route);
*/
//Route::group(['prefix' => 'admin', 'middleware' => 'ip'], function(){
    
    Route::get('salut', function () {
    echo 'salut les gens';
});


Route::get('/salut/{name}', function ($name) {
    
    //dd(Request::ip());
    return ' here controller of web routes!!! Salut '.$name; 
    return view('welcome');
});

Route::get('about', 'PageController@about', function(){
    
});
