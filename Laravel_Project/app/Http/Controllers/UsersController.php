<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function user() {
        return view('users.user');
    }

    public function userID($id) {
        return "User ID: " . $id;
    }

    public function login() {
        return view('users.login');
    }

    public function signUp() {
        return view('users.cadastro');
    }

}
