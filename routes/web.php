<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::post('/form-submit', function (Request $request) {
    
    $email = $request->input('email');
    
    if(!empty($email)) {
    
         $data = [
            "status" => "success",
            "message" => "Form submitted successfully.",
            "email" =>  $email,
         ];
    
         return response($data);
    
    }else{
    
        $data = [
            "status" => "failed",
            "message" => "Form submission failed.",
         ];
    
         return response($data);
    
    }
    
});

Route::get("/user-agent", function (Request $request) {
    $userAgent = $request->header('User-Agent');

    return response($userAgent);
});
