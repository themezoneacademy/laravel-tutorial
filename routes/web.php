<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function(){
//     return ("Hello Developer");
// });



// Route::get('/about', function(){
//     return ("Hello About");
// });



// Route::get('/blog', function(){
//     return ("Hello Blog");
// });


// $router->get('/', function(){
//     return "Hello Devs";


// });

// Route::get('/', function(){
//     return view('index');

// });



// Route::get('/about', function(){
//     return view('about');

// });



// Route::get('/blog', function(){
//     return view('blog');

// });


// Route::get ;
// Route::post;
// Route::put;
// Route::patch;
// Route::delete;



// Route::match(['get', 'post'], '/', function(){
//     return view('index');

// });




// Route::any('/', function(){
//     return view('index');
// });



// Route::get('/{id}', function($id){

//     return "Details Book Of Id $id";



// });



Route::get('book/{id}', function($id){
    return "Hello ".$id;
    
})->where("id", '[0-9]+');
