<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CafeMundoImperialController extends Controller
{
    public function index()
    {
        return view('cafemundoimperial');
    }
}