<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomFormController extends Controller
{
    //
    public function index(Request $request)
    {
        return $request->all();
    }
}
