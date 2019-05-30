<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{

    public function showBackend(){
        return view ('layouts.backend');
    }
}
