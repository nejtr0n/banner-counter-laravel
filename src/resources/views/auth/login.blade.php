@extends('layouts.app')

@section('content')
<div class="text-center">
    <form class="form-signin" method="POST" action="{{ route("signin") }}">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" name="remember_me"value="1"> Remember me
            </label>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>
</div>
@endsection
