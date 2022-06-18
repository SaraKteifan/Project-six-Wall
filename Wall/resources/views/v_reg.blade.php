@extends('master')

@section('title','volunteer register')
@section('title','volunteer.css')
@section('content')
<br>
<div class="container" >
  <div class="row ">
  
        <div class="col-lg-6"><img src="images/vol3.png" alt="" width="600vw" height="450hv"> </div>
        <div class="col-lg-4 text-start" style="margin-left:60px">
    
            <h3 class="text-danger text-opacity-50">Join Our Team Of Volunteers To Help Us Support  Who Need It.</h3>

    <form action='/added' method="post" >
       
        @csrf
        @method('PUT')
   
    <div class="form-group">
        <input type="text" class="form-control" id="" name="firstname" placeholder="Fisrt Name">
    </div><br>

    <div class="form-group">
        <input type="text" class="form-control" id="" name="lastname" placeholder="Last Name">
    </div><br>

    <div class="form-group">
      <input type="email" class="form-control" id="" name="email" placeholder="Email">
    </div><br>

    <div class="form-group">
      <input type="tel" class="form-control" id="" name="phonenumber" placeholder="Phone number">
    </div><br>

  <div class="form-group">
    <textarea class="form-control" id="" rows="3" name="description" placeholder="Describe Yourself and your work"></textarea>
  </div><br>
<br>
  <button type="submit" class="btn btn-danger">Submit</button>
</form>
</div>
  </div>
</div>
@endsection