<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard(){
        return "Admin Dashbaord";
    }
    function userList(){
        return "Admin userList";
    }
    function userRole(){
        return "Admin userRole";
    }
    function profile(){
        return "Admin profile";
    }
}
