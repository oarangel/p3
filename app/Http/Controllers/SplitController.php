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
        return view('display.show');

    }
    public function checkInput(Request $request)
    {
        $this->validate($request, [

            'totalAmt' => 'required|digits:5',
            'totalPer' => 'required|digits:2',
            'tipPercentage' => 'required',
        ]);


        # Return the view, with the total Amount, number of people and tip amount
        return view('display.show')->with([
            'totalAmt' => $totalAmt,
            'totalPer' => $totalPer,
            'searchResults' => $tipPercentage,
        ]);
    }

    public function contact()
    {
        return 'Questions? Email us at ' . Config::get('app.support email');
    }
}

