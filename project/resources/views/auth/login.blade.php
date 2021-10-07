@extends('base') 
@section('main')
<link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet" />
    <form class="form-signin" method="POST" action="{{ route('login.custom') }}">
        @csrf
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
        <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>
@endsection
