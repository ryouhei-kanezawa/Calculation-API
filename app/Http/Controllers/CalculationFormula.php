<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculationFormula extends Controller
{
    public function squared(Request $request){
        $tmp = $request->input('number');
        $tortal = $tmp * $tmp;
        
        $link = mysqli_connect('localhost', 'root', '', 'network');
        $stmt = mysqli_prepare($link, "INSERT INTO results (name, result) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "sd", "squared", $tortal);
        mysqli_stmt_execute($stmt);
        mysqli_close($link);

        return $tortal;
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
