<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;

class SplitController extends Controller
{

    public function index(Request $request)
    {
        # Extract the `total` from the session *if* it exists
        # If it doesn't, default $total to null
        $total = $request->session()->get('total') ?? null;

        # Return the view and include the $total data
        return view('display.index')->with([
            'total' => $total,
        ]);
    }

    function split(Request $request)
    {
        # Validate the data
        $this->validate($request, [
            'totalAmt' => 'required |numeric|min:10',
            'totalPer' => 'required |integer|min:2|max:20',
            'tipPercentage' => 'required',
        ]);

        # Get the values we'll need to do the calc from the request
        #$totalAmt = 'totalAmt';

        #dump($request);
        $totalAmt = $request->input('totalAmt');
        $totalPer = $request->input('totalPer');
        $tipPercentage = $request->input('tipPercentage', null);

        if ($tipPercentage == 'excellentTip') {
            $tipAmt = 1.20;
        } else if ($tipPercentage == 'goodTip') {
            $tipAmt = 1.18;
        } else if ($tipPercentage == 'averageTip') {
            $tipAmt = 1.15;
        } else {
            $tipAmt = 1.0;
        }

        # Split calculation.

        $total = ($totalAmt / $totalPer) * $tipAmt;

        # Send the user back to the page to see the form, where we'll show the total

        return redirect('/')->with(['total' => round($total)]);
    }

    # Return the view, with the total Amount, number of people and tip amount

    public function contact()
    {
        return 'Questions? Email us at ' . Config::get('app.support email');
    }
}

