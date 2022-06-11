@extends('layouts.app')

@section('title', 'Home')



@section('contents')

    <h2>THis is Home Page</h2>

    <ul>
        @foreach ($data as $d)
            <li>{{$d}}</li>
        @endforeach
    </ul>

    
@endsection