@extends('layouts.app')

@section('title', 'Successful registration')

@section('content')
    <div class="title m-b-md">
        Hello, {{ $username }}!
    </div>
    <h2>Thank you for registration!<br><br>Go to <a href='/'>Main page</a></h2>
@endsection
