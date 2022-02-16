<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculationFormula extends Controller
{
    public function squared(Request $request){
        $tmp = $request->input('number');

        return $tmp * $tmp;
    }

    public function cube(Request $request){
        $tmp = $request->input('number');

        return $tmp * $tmp * $tmp;
    }

    public function area_circle(Request $request){
        $tmp = $request->input('number');

        return $tmp * $tmp * 3.14;
    }
}
