<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // TopPage
    public function top()
    {
        return view('top');
    }

    public function bungoTop()
    {
        return view('bungo/top');
    }
}
