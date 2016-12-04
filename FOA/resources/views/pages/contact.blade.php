@extends('layouts.app')

@section('title', 'Contact')

@section('navbar')
    @parent

    <p>This is appended to the master navigation bar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection