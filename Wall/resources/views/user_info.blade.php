@extends('master')

@section('title','User')
@section('css','userInfo.css')
@section('content')
<br>


<nav aria-label="breadcrumb" class="breadcrumbNav">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}" class="first-a">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Your Profile</li>
  </ol>
</nav>
<main>
  {{-- <img src="/images/logo.png"> --}}
  <div class="container text-center">
    <div class="row">
    
      <div class="col-lg-12">
        <div class="page-content page-container" id="page-content">
          <div class="padding">
              <div class="row container d-flex justify-content-center">
      <div class="col-xl-8 col-md-12">
        {{--    <td>{{$info->first_name}}</td>
              <td>{{$info->last_name}}</td>
              <td>{{$info->email }}</td>
              <td>{{$info->phone_number}}</td>
              <td>{{$info->address}}</td>
              <td>&ensp;&ensp;<a href="{{url('update-info/id/'.$info->id)}}"><i class="fa-solid fa-pen-to-square"></i></a> </td> --}}
                                                      <div class="card user-card-full">
                                                          <div class="row m-l-0 m-r-0">
                                                              <div class="col-sm-4 bg-c-lite-green user-profile">
                                                                  <div class="card-block text-center text-white">
                                                                      <div class="m-b-25">
                                                                          {{-- <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> --}}
                                                                      </div>
                                                                      <h2 class="f-w-600">
                                                                        <span>{{$info->first_name}} </span><span>{{$info->last_name}}</span></h2>
                                                                      <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                                  </div>
                                                              </div>
                                                              <div class="col-sm-8">
                                                                  <div class="card-block text-start">
                                                                      <h6 class="m-b-20 p-b-5 b-b-default f-w-600 text-start">Information</h6>
                                                                      <div class="row">
                                                                          <div class="col-sm-6">
                                                                              <p class="m-b-10 f-w-600">Email</p>
                                                                              <h6 class="text-muted f-w-400">{{$info->email }}</h6>
                                                                          </div>
                                                                          <div class="col-sm-6">
                                                                              <p class="m-b-10 f-w-600">Phone</p>
                                                                              <h6 class="text-muted f-w-400">{{$info->phone_number}}</h6>
                                                                          </div>
                                                                      </div>
                                                                      <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                                                      <div class="row">
                                                                          <div class="col-sm-6">
                                                                              <p class="m-b-10 f-w-600">City</p>
                                                                              <h6 class="text-muted f-w-400">{{$info->city}}</h6>
                                                                          </div>
                                                                          <div class="col-sm-6">
                                                                              <p class="m-b-10 f-w-600">Address</p>
                                                                              <h6 class="text-muted f-w-400">{{$info->address}}</h6>
                                                                          </div>
                                                                      </div>
                                                                     
                                                                  </div>
                                                                  <br>
                                                                  <a class="btn update text-start" href="{{url('update-info/id/'.$info->id)}}">Update</i></a>
                                                                  <br>
                                                                </div>
                                                            
                                                          </div>
                                                          
                                                      </div>
                                                  </div>
                                                   </div>
                                                      </div>
                                                  </div>
          {{-- <table class="table table-striped table-responsive w-75">
          <thead>
            <tr>
              <th scope="col">First name</th>
              <th scope="col">Last name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone_number</th>
              <th scope="col">Address</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
              
            <tr>
              <td>{{$info->first_name}}</td>
              <td>{{$info->last_name}}</td>
              <td>{{$info->email }}</td>
              <td>{{$info->phone_number}}</td>
              <td>{{$info->address}}</td>
              <td>&ensp;&ensp;<a href="{{url('update-info/id/'.$info->id)}}"><i class="fa-solid fa-pen-to-square"></i></a> </td>
             
            </tr>
          </tbody>
      </table> --}}
  </div>
  {{-- <img src="/images/color.gif" alt="" width="40px" height="300px"  class=""> --}}
  </div>
  </div>
</main>

@endsection