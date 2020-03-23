<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page3Controller extends Controller
{
    public function PageView()
    {
        return \view('page3');
    }
}
