
@extends('master')

@section('title','Reservation')
@section('css','reserv.css')
@section('content')
<nav aria-label="breadcrumb" class="breadcrumbNav">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}" class="first-a">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Reservation</li>
    </ol>
  </nav>
<div class="container-fluied">
<div class="container" id="polina">
    
    <div class="row text-start w-100 fs-5 px-5">

     <div class="col-lg-8">
        @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{session('message')}}
                        </div>
                    @endif
        <form action={{url("/bringReservation/id/$userId")}} method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_token" value="{{csrf_token()}}" />

            <label>*Choose service?</label><br>
            <select  class="mb-3" name="service" id="cars">
                @foreach ($services as $ser)
                    <option value="{{$ser->id}}">{{$ser->service_name}}</option>  

                @endforeach    
            </select>
            <br>
           <label>*Would you be able to pay the the service's cost?</label>
           <br>
            <input  class="mb-3" type="radio"  name="pay" value="1"><label >Yes</label>
            <input class="mb-3" type="radio"  name="pay" value="0"><label>No</label>
            <label>*Upload an image of the location of required service:</label><br>
            <input class="mb-3" type="file"  name="service_image" class="mb-5" required><br><br>
            <label>*Calculate Cost:</label><br>
            <label for="">Height</label>
            <input type="number" name="Height" id="Height" oninput="calc();" required >m
            <br><label for="">Width</label>&nbsp;
            <input type="number" name="Width" id="Width" oninput="calc();" required>m
            <input type="hidden" name="cost" id="cost"  value="30">
            <br> Total <input type="number" id="total" name="total"  readonly>JOD<br><br>
                                     
            <button  class="btn btn-danger  d-none d-md-block pull-right  hidden-xs hidden-sm waves-effect waves-light text-white">Send</button>
        </form>
     </div>
        
     {{-- <div class="col-lg-4"><img src="https://www.sun-sentinel.com/resizer/3n1b8xfXcvqEwfT3df_rY-s_MCM=/2000x1157/filters:format(jpg):quality(70)/www.trbimg.com/img-5a14a5d4/turbine/fl-sb-hollywood-murals-street-art-20171103" alt="" srcset="" width="560px" height="500px"> </div> --}}
</div>
  </div>



@endsection

<script>
    function calc() {
      var Height = document.getElementById("Height").value;
      var Height = parseInt(Height, 10);
      var Width = document.getElementById("Width").value;
      var Width = parseInt(Width, 10);
      var cost = document.getElementById("cost").value;
      var cost = parseInt(cost, 10);
      var total = Height * Width * cost /2;
      document.getElementById("total").value = total;
    }
     </script>
</div>