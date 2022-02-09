<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculationSquared extends Controller
{
    public function index(Request $request){
        return $request * $request;
    }
}
