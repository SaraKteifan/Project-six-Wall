@extends('master')
{{-- To add home title --}}
@section('title','Services')
{{-- To add home css file --}}
@section('css','singleService.css')
 {{-- To add home body --}}
@section('content')

<main>
    <nav aria-label="breadcrumb" class="breadcrumbNav">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/#services')}}" class="first-a">Services</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{$service->service_name}}</li>
        </ol>
      </nav>
    <div class="container">

        <div class="row content">
            <div class="col-lg-6">
                <img src="{{url('/images/services/'.$service->service_image)}}" height="100%" width="100%">
            </div>
            <div  class="col-lg-6 text-start">
                <h1>{{$service->service_name}}</h1>
                <span>Cost: <b>{{$service->service_cost}}</b></span>
                <p>{{$service->service_description}}</p>
                <a href="/login" class="btn">Reserve NOW</a>
                
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</main>
@endsection
