@extends('base') 
@section('main')
<link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet" />
    <form class="form-signin" action="{{ route('register.custom') }}" method="POST">
        @csrf
    
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">

        <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>

        <input style="margin-bottom:10px;border-radius:.25rem;" type="text" name="name" class="form-control" placeholder="Name" required>
        @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif

        <input style="margin-bottom:10px;border-radius:.25rem;" type="email" name="email" class="form-control" placeholder="Email address" required>
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif

        <input style="margin-bottom:10px;border-radius:.25rem;" type="password" name="password" class="form-control" placeholder="Password" required>
        @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif

        <select name="role" class="form-control" required>
            <option value="">Role</option>
            <option value="admin">Admin</option>
            <option value="publisher">Publisher</option>
        </select>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>
@endsection
