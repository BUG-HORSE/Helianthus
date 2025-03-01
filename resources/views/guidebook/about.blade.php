@extends('guidebook.layout')

@section('guidebook-title')
    Home
@endsection

@section('content')
    {!! breadcrumbs(['Guidebook' => 'guidebook', 'About' => 'world/about']) !!}

    <h1>About</h1>

@endsection
