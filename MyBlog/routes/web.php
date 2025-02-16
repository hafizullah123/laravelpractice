<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
  return  "wellcom to the about page this paratical work of the laravel framwork inshaullah i will make the project as will  ";
});

Route::post('/', function (Request $request ) {
    dd($request ->all());
    return view('welcome');
});

Route::put('/', function (Request $request ) {
    dd($request ->all());
   
});


