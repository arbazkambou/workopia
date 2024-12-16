<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/test', function(Request $request){
return response()->json(['hello'=>"g"])->cookie('name','arbaz',60);
});



Route::get('/read-cookie', function(Request $request){

    $cookie=$request->cookie('name');
    return response()->json(['cookie'=>$cookie]);
});


