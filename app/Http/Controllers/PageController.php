<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return 'This is information about the Bill Splitter page';
    }

    public function contact()
    {
        return 'Questions? Email us at ' . Config::get('app.support email');
    }
}
