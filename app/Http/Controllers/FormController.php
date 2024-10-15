<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showLogPage()
    {
        return view('Form.Login');
    }
}
