<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class discountCalculatir extends Controller
{
    public function showHomePage()
    {
        return view('midterms.home');
    }

    public function calculatediscount(Request $request)
    {
        $request->validate([
            'number1' => 'required|numeric',
        ]);

        $num1 = $request->input('number1');
        $num2 = 0.5;

        dd($num1, $num2);
    }
}
