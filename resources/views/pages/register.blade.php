@extends('layouts.authLayout')
@section('content')

<div class="card mt-5 p-4 mx-auto" style="width: 30rem;">
	<h3>Register</h3>

	<form action="/register" method="POST">
        @csrf

    <div class="mb-3">
        <label class="form-label" for="inputEmail">Email</label>
        <input type="text" name="name" class="form-control" placeholder="Name">
    </div>
    <div class="mb-3">
        <label class="form-label" for="inputEmail">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Email">
    </div>
    <div class="mb-3">
        <label class="form-label" for="inputPassword">Password</label>
        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
    <div class="mt-2"><a href="/login">login</a></div>
</form>
</div>


@stop