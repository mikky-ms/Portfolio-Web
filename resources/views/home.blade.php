@extends('layouts.app')
@section('pagecontent')
<!-- Banner Section-->
<header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                <!-- Header text content-->
                <div class="text-center text-xxl-start">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">Internet &middot; Engineer</div></div>
                    <h1 class="display-3 fw-bolder"><span class="text-gradient d-inline">Hello,This is Nafiis</span></h1>
                    <div class="fs-3 fw-light text-muted"><span class="text-gradient d-inline">Student of Internet Enginering Technology</span></div>
             
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">

                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href={{ url('/Projects') }}>Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7">
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <div class="profile">
                        <img class="profile-img" src="{{ asset('images/OIG1.png') }}" alt="profile" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- About Section-->
<section class="bg-light py-5 bg-black">
    <div class="container px-5">
        <div class="col-12 text-center">
            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
            <p class="lead fw-light mb-4">PHP and Laravel Developer</p>
        </div>
        <div class="row gx-5 justify-content-center">
           
            
           <p class="d-flex fs-2 gap-4 text-white"> I am a student at Electronic Engineering Polytechnic Institute of Surabaya, majoring in Internet Engineering Technology. I have a strong interest in Network Engineering, especially in Network Infrastructure, Security Engineering and Cyber Security. In addition, I am also very interested in the development of Internet of Things (IoT) and Cloud Computing technologies.</p> 
            <div class="col-md-5 col-sm-12 my-5">
           
                <div class="d-flex fs-2 gap-4 ">
                    <a class="text-gradient" href="https://www.linkedin.com/in/muhammadnaufalnafiis" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a class="text-gradient" href="https://github.com/mikky-ms" target="_blank"><i class="fab fa-github"></i></a>
                    <a class="text-gradient" href="https://www.instagram.com/nafiis.naufal" target="_blank"><i class="fab fa-instagram"></i></a>
                
                <a class="btn btn-primary  d-flex btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder float-end" href={{ url('/About') }}>More</a>
            </div></div>
        </div>
    </div>
    </div>
</section>

<!-- Contact Section-->
<section class="py-5 bg-black">
    <div class="container">
        <div class="col-12 text-center">
            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Feel free to Connect</span></h2>
        </div>

        <div class="row justify-content-center my-5">
            <div class="col-sm-12 col-md-6 col-lg-6 col-12">
                <form id="contactForm">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Enter your name..."/>
                        <label for="name">Full name</label>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com" />
                        <label for="email">Email address</label>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="tel" placeholder="enter your phone number"/>
                        <label for="phone">Phone number</label>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem"></textarea>
                        <label for="message">Message</label>
                    </div>
                    <!-- Form Button-->
                    <div class="form-floating d-grid mb-3">
                        <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection