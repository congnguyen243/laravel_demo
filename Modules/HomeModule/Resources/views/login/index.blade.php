@extends('homemodule::layouts.master')

@section('content1')

<div class="container d-flex justify-content-center">

    <div style="width:30%">
    
        <form>
            <h1 class="h3 mb-3 mt-5 fw-normal d-flex justify-content-center">Login </h1>
            <label for="inputEmail" class="visually-hidden">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <br>
            <label for="inputPassword" class="visually-hidden">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            <div class="checkbox mb-3">
            <br>
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
            </div>
            <button class="w-100     btn btn-lg btn-primary" type="submit">Sign in</button>
            <!-- <p class="mt-5 mb-3 text-muted">© 2017-2021</p> -->
        </form><br/>
        
    </div>
</div>


@endsection
