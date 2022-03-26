@extends('layouts.authLayout')
@section('content')

<div class="card mt-5 p-4 mx-auto" style="width: 30rem;">
	<h3>Login</h3>

	<form action="/login" method="POST">
        @csrf

    <div class="mb-3">
        <label class="form-label" for="inputEmail">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="ca@gmail.com">
    </div>
    <div class="mb-3">
        <label class="form-label" for="inputPassword">Password</label>
        <input type="password" name="password" class="form-control"  placeholder="Password" value="adsad">
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
    <div class="mt-2"><a href="/register">Register</a></div>
</form>
</div>


@stop