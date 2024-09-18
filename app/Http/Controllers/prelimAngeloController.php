<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prelimAngeloController extends Controller
{
    public function showOperatorPage() {
        return view('prelim-angelo.main');
    }

    public function showSubtractionPage() {
        return view('prelim-angelo.subtraction', ['result' => null]);
    }

    public function calculateAddition (Request $request) {

        $request->validate([
            'number1' => 'required|numeric',
            'number2' => 'required|numeric',
        ]);

        $num1 = $request->input('number1');
        $num2 = $request->input('number2');

        $result = $num1 + $num2;

        return view('prelim-angelo.addition', [
            
            'result' => $result
        ]);
    }

    public function calculateSubtraction(Request $request) {

        $request->validate([
            'number1' => 'required|numeric',
            'number2' => 'required|numeric',
        ]);
    
        $num1 = $request->input('number1');
        $num2 = $request->input('number2');
    
        $result = $num1 - $num2;
    
        return view('prelim-angelo.subtraction', ['result' => $result]);
    }

    public function calculateDivision(Request $request) {

        $request->validate([
            'number1' => 'required|numeric', 
            'number2' => 'required|numeric',
        ]);

        $num1 = $request->input('number1');
        $num2 = $request->input('number2');

        $result = $num1 / $num2;

        return view('prelim-angelo.division',['result' => $result]);
    }

    public function calculateMultiply(Request $request) {
        $request->validate([
            'number1' => 'required|numeric',
            'number2' => 'required|numeric',
        ]);

        $num1 = $request->input('number1');
        $num2 = $request->input('number2');

        $result = $num1 * $num2;

        return view('prelim-angelo.multiplication', ['result' => $result]);
    }
}


