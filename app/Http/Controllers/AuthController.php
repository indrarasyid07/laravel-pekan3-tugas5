<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function welcome(Request $request) {
        //dd($request->all());
        $nama= $request["FirstName"]." ".$request["LastName"];
        return view('Hari2.welcome', compact("nama"));
    }
}
