<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page1Controller extends Controller
{
    public function PageView()
    {
        return \view('page1');
    }
}
