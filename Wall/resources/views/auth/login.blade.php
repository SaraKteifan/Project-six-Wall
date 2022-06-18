@extends('master')
@section('title', 'Login')
@section('css', 'login.css')
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Login</div>
                  <div class="card-body">
                    @if (session('message'))
                    <div class="alert alert-dander" role="alert">
                        {{session('message')}}
                    </div>
                @endif
                      <form action="{{route('login.post')}}" method="post">
                          @csrf
                          
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="col-md-12">
                              <button type="submit" class="btn btn-primary col-lg-4 text-center offset-md-5">
                                  Login
                              </button>
                              <p class="offset-md-2 text-center have-account" >
                                Don't have an account?
                                <a href="/registration" style="font-size: 17px">
                                <br>Register Now</a></p>
                              
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection