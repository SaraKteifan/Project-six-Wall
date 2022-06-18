@extends('master')
@section('title','Update Information')
@section('css','update.css')
@section('content')

<main>
    <img src="/images/logo.png">
    <div class="container text-start" >
        <div class="row row-cols-4">

            <div class="col-lg-12 ">
                <h1 class="fw-bolder ml-5">Edit User information</h1>
                `
                <form action='{{url('/update/id/'.$update->id)}}' method="post">

                       
                      
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="fw-bolder">Fisrt Name</label>
                            <input type="text" id="" name="firstname" value="{{$update->first_name}}" >
                            <span style="color: red;">@error('firstname'){{$message}}@enderror </span>
                        </div>
                        <div class="form-group">
                            <label class="fw-bolder">Last Name</label>
                            <input type="text" id="" name="lastname" value="{{$update->last_name}}" >
                            <span style="color: red;">@error('lastname'){{$message}}@enderror </span>
                        </div>
                      
                        
                        <div class="form-group">
                            <label class="fw-bolder">E-mail</label>
                            <input type="text" id="" name="email" value="{{$update->email}}">
                            <span style="color: red;">@error('email'){{$message}}@enderror </span>
                    </div>
                    
                    <div class="form-group ">
                        <label class="fw-bolder">Phone Number</label>
                        <input type="text" id="" name="phonenumber" value="{{$update->phone_number}}" >
                        <span style="color: red;">@error('phonenumber'){{$message}}@enderror </span>
                    </div>
                    
                    <div class="form-group">
                        <label class="fw-bolder"> Address </label>
                        <input type="text"  id="" name="address" value="{{$update->address}}">
                    </div>
                    
                    
                    <div class="form-group">
                        <label class="fw-bolder"> Password </label>
                        <input type="password" id="" name="password" value="" >
                        <span style="color: red;">@error('password'){{$message}}@enderror </span>
                    </div>
                    <br>
                    <button type="submit" class="btn">Update</button>
                
            </form>
        </div>
      
    </div>
</div>
</main>
    @endsection