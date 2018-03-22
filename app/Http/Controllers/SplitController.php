<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;

class SplitController extends Controller
{
    public function index()
    {
        return 'Show the split input Form';
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function checkInput()
    {
        return 'Check inputs provided by the user and send to calc code';
    }

    public function contact()
    {
        return 'Questions? Email us at ' . Config::get('app.support email');
    }
}
