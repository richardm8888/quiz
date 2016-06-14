@extends('layouts.master')

@section('title', 'Page Title')

@section('menu')
    @parent
@endsection

@section('content')
    <a href="/register">Register</a>
    <br />
    <a href="/login">Login</a>
@endsection