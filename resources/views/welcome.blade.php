@extends('layouts.app')

@section('title', 'laravel practise')

@section('content')
    <div class="title m-b-md">
        Laravel practice
    </div>

    <div>
        <form class="form_sign-in" method="post">
            @csrf
            <h2>Welcome registration</h2>
            <input class="enter" type="text" name="username" placeholder="username" required>
            <input class="enter" type="email" name="email" placeholder="Email" required>

            <input class="enter" type="password" name="password" minlength="5" placeholder="Password" required>

            @if(isset($error_registration))
                <div class="error_message">
                    {{$error_registration}}
                </div>
            @endif

            <div>
                <input type="submit" name="submit" value="Continue">
            </div>
            @include('layouts.registered')
        </form>
    </div>
@endsection

