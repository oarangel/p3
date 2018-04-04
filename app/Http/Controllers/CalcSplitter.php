<?php
/** Left in PLace for Learning Purposes */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcSplitter extends Controller
{
    public function index()
    {
        return 'Here are all the available split inputs';
    }

    public function show($tipAmt)
    {
        return 'You are viewing the tip percentage amount ' . $tipAmt;
    }
}
