@extends('layouts.master')


@push('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
          rel='stylesheet' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
          crossorigin='anonymous'>

    <link href='/css/p3.css' rel='stylesheet'>
@endpush

@section('content')
    <h1>{{-- $title--}}</h1>

    <p>
        Details about the tip calculator will go here...
    </p>
@endsection

