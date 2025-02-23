@extends('layouts.app')

@section('title')
    Guidebook ::
    @yield('guidebook-title')
@endsection

@section('sidebar')
    @include('guidebook._sidebar')
@endsection

@section('content')
    @yield('guidebook-content')
@endsection

@section('scripts')
    @parent
@endsection
