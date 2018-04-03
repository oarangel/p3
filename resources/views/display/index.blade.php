@extends('layouts.master')


@push('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
          rel='stylesheet' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
          crossorigin='anonymous' xmlns="http://www.w3.org/1999/html">

    <link href='/css/p3.css' rel='stylesheet'>
@endpush



@section('content')
    <h1>Bill Splitter</h1>


    <form method='GET' action='/split'>

        <div class='details'>* Required fields</div>

        <div>
            <label for='totalAmt'>* Enter Bill Amount</label>
            <input type='text' name='totalAmt' id='totalAmt' value='{{ old('totalAmt') }}'>
            @include('modules.error-field', ['field' => 'totalAmt'])
        </div>

        <div>
            <label for='totalPer'>Enter Number of Persons:</label>
            <input type='text' name='totalPer' id='totalPer' placeholder='2' value='{{ old('totalPer') }}'>
            @include('modules.error-field', ['field' => 'totalPer'])


            <p class='ex2'> Minimun number of persons is 2 and Maximun is 20.</p>
            <p class='ex2'> Enter integer numbers.</p>
        </div>
        <div>
        <label> Select Tip Percentage </label>


        <select name='tipPercentage' id='tipPercentage'>
            <option value='choose'>Choose one...</option>
            <option value='excellentTip'> 20% Excellent Service</option>
            <option value='goodTip'> 18% Good Service</option>
            <option value='avgTip'>15% Average Service</option>

        </select>
        <p class='ex2'>If not selected, no Tip will be added. </p>
        </div>

        <input type='submit' value='Calculate' class='btn btn-primary'>

        @include('modules.error-form')
    </form>

    @if(isset($total))
        Total each person owes: ${{ $total }}
    @endif
@endsection