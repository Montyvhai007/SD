<?php 
 
namespace App\Http\Controllers; 
 
use Illuminate\Http\Request; 
 
class ExampleController extends Controller 
{ 
    
    Public function handleForm(Request $request) 
    { 
        $name = $request->input('name'); 
        return "Form submitted! Hello, $name!"; 
    } 
} 
