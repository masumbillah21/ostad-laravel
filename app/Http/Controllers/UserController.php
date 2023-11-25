<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function dashboard(){
        return "User Dashbaord";
    }
    function tasks(){
        return "User tasks";
    }
    function profile(){
        return "User profile";
    }
}
