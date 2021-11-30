<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function store(Request $request)
    {
        return round(pow((sqrt(5)+1)/2, $request->index) / sqrt(5));
    }
}
