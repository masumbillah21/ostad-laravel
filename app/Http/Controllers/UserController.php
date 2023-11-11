<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login($email, $password): string{
        if ($email == 'masum@billah.com' && $password == '12345678') {
            return 'Login successful';
        }else{
            return 'Invalid credentials';
        }
    }
}
