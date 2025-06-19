<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TavolaMundoImperialController extends Controller
{
    public function index()
    {
        return view('tavolamundoimperial');
    }
}