@extends('master')
{{-- To add home title --}}
@section('title','About Us')
{{-- To add home css file --}}
@section('css','about.css')
 {{-- To add home body --}}
@section('content')
<nav aria-label="breadcrumb" class="breadcrumbNav">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}" class="first-a">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">About Us</li>
  </ol>
</nav>
<br>
<section class="about" id="about">
    <div class="container">
        <div class="heading text-center">
            <h2>About <span>Us</span></h2><br>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <img src="http://2.bp.blogspot.com/-DUXbBA3uucI/UBGNPDiSP_I/AAAAAAAAAOE/ZY5kvdZG8iY/s1600/001%2BBALMES%2B2010.jpg" alt="about" class="img-fluid" width="100%" id="aboutus-image">
            </div>
            <div class="col-lg-6">
                <br>
                <h4 id="about-us-section" class=" text-start">W(all): Where colorful give us a bright life!</h4>
                <p class=" text-start">Our website is the beloved activities of people all over the world … 
                   and we know how to have lotsa acceptance! To effectively influence civil society and all partners
                   and the relevant authorities through charitable work and social responsibility. “</p>
                <br>
                
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="purplee text-start">
                            <i class="fa-solid fa-paint-roller"></i>&nbsp;Experienced Designers</h4>
                    </div>
                    <div class="col-md-6 text-start">
                        <h4 class="yellowe">
                           <i class="fa-solid fa-paint-roller"></i>&nbsp;Creative Design</h4>
                    </div>
                    <div class="col-md-6 text-start">
                        <h4 class="greene">
                           <i class="fa-solid fa-paint-roller"></i>&nbsp;Better Client Service</h4>
                    </div>

                    <div class="col-md-6 text-start">
                        <h4 class="bluee">
                            <i class="fa-solid fa-paint-roller"></i>&nbsp;Flexibility</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="about">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-6">
                <br>
                <div class="row mt-5 text-start">
                    <p>Based on the sustainable development goal, we seek to carry out activities aimed at the advancement of society and solving its problems, so we will implement activities to draw murals in every suitable place to spread various messages such as rejecting violence, helping others, encouraging studies, and supporting the projects of our colleagues</p><br><br>
                    <div class="col-md-6">
                        <h4 class="greene">
                            <i class="fa-solid fa-brush"></i>&nbsp; GreenLand</h4>
                    </div>
                    <div class="col-md-6">
                        <h4 class="yellowe">
                            <i class="fa-solid fa-brush"></i>&nbsp; O'ns</h4>
                    </div>
                    <div class="col-md-6">
                        <h4 class="bluee">
                            <i class="fa-solid fa-brush"></i>&nbsp; Noor</h4>
                    </div>

                    <div class="col-md-6">
                        <h4 class="purplee">
                            <i class="fa-solid fa-brush"></i>&nbsp; Others</h4>
                    </div>
                </div>
            </div>
                    <div class="col-lg-6">
                <img src="https://cobaltchronicles.com/wp-content/uploads/2019/03/Snapseed-3.jpg" alt="about" class="img-fluid" width="100%" id="aboutus-image">
            </div>
        </div>
        <br><br>
       
       <h2 align="center">Our Team </h2>

        <div class="row carda">  
            <div class="card col-lg-3">
              <img src="https://avatars.githubusercontent.com/u/100212077?v=4" alt="Tamara Shabatat" />
              <div class="content box1">
                <h4>Tamara Shabatat</h4>
                <h6>Product Onwer</h6>
                <ul>
                  <li>
                    <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="https://github.com/tamara126enad" target="_blank"><i class="fa-brands fa-github"></i></a>
                  </li>
                  <li>
                    <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                  </li>
                </ul>
              </div>
            </div>
      
            <div class="card col-lg-3">
              <img src="https://avatars.githubusercontent.com/u/100211522?v=4" alt="Sara Kteifan" />
              <div class="content box2">
                <h4>Sara Kteifan</h4>
                <h6>Scrum master</h6>
                <ul>
                  <li>
                    <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="https://github.com/SaraKteifan" target="_blank"><i class="fa-brands fa-github"></i></a>
                  </li>
                  <li>
                    <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                  </li>
                </ul>
              </div>
            </div>

                  
            <div class="card col-lg-3">
              <img src="https://avatars.githubusercontent.com/u/49879845?v=4" alt="Raghad Karasneh" />
              <div class="content box1">
                <h4>Raghad Karasneh</h4>
                <p></p>
                <ul>
                  <li>
                    <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="https://github.com/RaghadKarasneh" target="_blank"><i class="fa-brands fa-github"></i></a>
                  </li>
                  <li>
                    <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          

          <div class="card col-lg-3">
            <img src="https://avatars.githubusercontent.com/u/100211179?v=4" alt="Dyar Hunaity" />
            <div class="content box2">
              <h4>Dyar Hunaity</h4>
              <p></p>
              <ul>
                <li>
                  <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                  <a href="https://github.com/Dyarhunaity" target="_blank"><i class="fa-brands fa-github"></i></a>
                </li>
                <li>
                  <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>

        </div>
    </div>
</div>



</section>

@endsection




