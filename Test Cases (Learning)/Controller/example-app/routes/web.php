<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExampleController; 

Route::get('/form', function () { 
    return view('form'); 
}); 
Route::post('/submit', [ExampleController::class, 'handleForm']); 


