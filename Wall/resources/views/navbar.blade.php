
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Bootstrap script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/7b836f378e.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="/css/navbar.css">
      <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/@yield('css','')">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="/images/logo.png" height= "110px" width= "120px" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse borderXwidth" id="navbarSupportedContent">
        <ul class="navbar-nav navbar-direction">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/about-us')}}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/#services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/info/{{Session('id')}}" style="display:{{$displayNav}}">Your Account</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="/info/{{Session('id')}}" style="display:{{$displayNav}}">LOGOUT</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="/" style="display:{{$displayNav}}">Logout</a>
            </li>
            <li class="nav-item">
                <a class="nav-link hidden-nav" href="/registration">Sign Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link hidden-nav" href="/login">Sign In</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="{{url('/contact-us')}}">Contact Us</a>
            </li>
        </ul>
        </div>
    </nav>
</header>