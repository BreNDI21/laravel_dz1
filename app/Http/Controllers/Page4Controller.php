<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page4Controller extends Controller
{
    public function PageView()
    {
        return \view('page4');
    }
}
