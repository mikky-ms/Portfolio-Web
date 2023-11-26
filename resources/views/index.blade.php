@extends('layouts.app')
@section('pagecontent')
<!-- Banner Section-->
<header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                <!-- Header text content-->
                <div class="text-center text-xxl-start">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">Design &middot; Development</div></div>
                    <h1 class="display-3 fw-bolder"><span class="text-gradient d-inline">Hello,This is Tahmina Tanzin Sunni</span></h1>
                    <div class="fs-3 fw-light text-muted"><span class="text-gradient d-inline">Backend Developer</span></div>
             
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">

                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href={{ url('/Projects') }}>Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7">
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <div class="profile">
                        <img class="profile-img" src="{{ asset('images/tahmina.jpg') }}" alt="profile" />
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
           
            
           <p class="d-flex fs-2 gap-4 text-white"> A focused, flexible and devoted individual who is looking forward to work in a customer centric environment. An organized, detail-oriented and passionate engineer, who is able to accomplish multiple tasks at ease, without compromising on quality.</p> 
            <div class="col-md-5 col-sm-12 my-5">
           
                <div class="d-flex fs-2 gap-4 ">
                    <a class="text-gradient" href="https://www.linkedin.com/in/tanzin-sunni-a3823510b/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a class="text-gradient" href="https://github.com/tanzinsunni" target="_blank"><i class="fab fa-github"></i></a>
                    <a class="text-gradient" href="https://twitter.com/tanzinsunni" target="_blank"><i class="fab fa-twitter"></i></a>
                
                <a class="btn btn-primary  d-flex btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder float-end" href={{ url('/About') }}>More</a>
            </div></div>
        </div>
    </div>
    </div>
</section>

<!-- Service Section-->
<section class="py-5 bg-black" id="Service">
    <div class="container">
        <div class="col-12 text-center">
            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Services </span></h2>
        </div>

        <div class="row justify-content-center my-5">
            <div class="col-md-5 col-lg-5 col-12 m-2">
                <div class="card">
                <div class="card-body">
                    <i class="fab fa-html5 bg-primary text-white p-2 mb-2 rounded fs-1"></i>
                    <h5 class="card-title">Design Website</h5>
                    <p class="card-text">I can Design Website using Html,CSS,Javasript.</p>
                </div>
                </div>
            </div>

            <div class="col-md-5 col-lg-5 col-12 m-2">
                <div class="card">
                <div class="card-body">
                    <i class="fas fa-mobile bg-primary text-white p-2 mb-2 rounded fs-1"></i>
                    <h5 class="card-title">Backend Development</h5>
                    <p class="card-text">I am a learner of backend of software.</p>
                </div>
                </div>
            </div>

            <div class="col-md-5 col-lg-5 col-12 m-2">
                <div class="card">
                <div class="card-body">
                    <i class="fab fa-php bg-primary text-white p-2 mb-2 rounded fs-1"></i>
                    <h5 class="card-title">Web Development With PHP.I am learning it in OSTAD.I have learnt Array PhP,Object Oriented Programming in PHP,Functions etc.</h5>
                  
                </div>
                </div>
            </div>

            
        </div>
      </div>
</section>

<!-- Project Section-->
<section class="py-5 bg-black">
    <div class="container">
        <div class="col-12 text-center">
            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">My Portfolio</span></h2>
        </div>

        <div class="row justify-content-center my-5">
            <!-- Project Card 1-->
            <div class="col-md-4 col-lg-4 col-12">
              
                <div class="card overflow-hidden shadow rounded-4 border-0">
                    <div class="overflow-hidden" style="height: 200px">
                        <img class="w-100" src="{{ asset('images/image.png') }}" alt="..." />
                    </div>
                    <div class="card-body p-0">
                        <div class="p-5">
                        <h2 class="fw-bolder">Photography Website</h2>
                        <p>Sometimes Itcreates difficulties when people who want to book a photography session request their favorite photographer but they cannot book because of lacking information and communication. By having this system, it will be easier for them to make their booking.“Photography Booking System: Aurora” is a bunch of benefits from the various point of view. As this online application enables the user to register to the system online, select the photographers of their choice from the photographer list, and their photography packages, and can book. Users can give opinions and ratings. Users can book photography packages</p>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <!-- Project Card 2-->
            <div class="col-md-4 col-lg-4 col-12">
                <a href="" target="_blank" class="text-decoration-none">
                <div class="card overflow-hidden shadow rounded-4 border-0">
                    <div class="overflow-hidden" style="height: 200px">
                        <img class="w-100" src="{{ asset('images/imagee.png') }}" alt="..." />
                    </div>
                    <div class="card-body p-0">
                        <div class="p-5">
                        <h2 class="fw-bolder">Portfolio Website</h2>
                        <p>My portfolio website is a vibrant gallery that showcases the essence of your creative journey. It's a digital sanctuary where my accomplishments, innovations, and passion converge, offering visitors a glimpse into my world of creativity and expertise.Once you have a handful of Pages, create a second Collection by using the "+" icon in the left side bar (or from Pages tab), and create another Collection by naming it, then choosing what Pages will be included in it. From there, you can use the Pages icon at any time to manage which Pages appear in which Collections by toggling them on/off, re-order within a Collection, rename, or make any other customizations you'd like.</p>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <!-- Project Card 3-->
         
        </div>
        <div class="text-center">
            <a class="btn btn-primary btn-lg px-5 py-3 fs-6 fw-bolder mt-2 m-auto" href={{ url('/Projects') }}>All Portfolio</a>
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