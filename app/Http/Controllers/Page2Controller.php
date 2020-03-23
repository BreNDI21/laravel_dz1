<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page2Controller extends Controller
{
    public function PageView()
    {
        return \view('page2');
    }
}
