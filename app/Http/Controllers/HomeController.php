<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function register() {
        return view('Hari2.form');
    }
}
