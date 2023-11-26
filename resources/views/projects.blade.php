@extends('layouts.app')
@section('pagecontent')
            <!-- Projects Section-->
            <section class="py-5 bg-black">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <!-- Project Card 1-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <img class="w-100" src="{{ asset('images/image.png') }}" alt="..." />
                                    <div class="p-5 w-75">
                                        <h2 class="fw-bolder">Photography Website</h2>
                                        <p>Sometimes Itcreates difficulties when people who want to book a photography session request their favorite photographer but they cannot book because of lacking information and communication. By having this system, it will be easier for them to make their booking.“Photography Booking System: Aurora” is a bunch of benefits from the various point of view. As this online application enables the user to register to the system online, select the photographers of their choice from the photographer list, and their photography packages, and can book. Users can give opinions and ratings. Users can book photography packages</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Card 2-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <img class="w-100" src="{{ asset('images/imagee.png') }}" alt="..." />
                                    <div class="p-5 w-75">
                                        <h2 class="fw-bolder">Portfolio Website</h2>
                                        <p>My portfolio website is a vibrant gallery that showcases the essence of your creative journey. It's a digital sanctuary where my accomplishments, innovations, and passion converge, offering visitors a glimpse into my world of creativity and expertise.</p>
                                    </div>
                                </div>
                            </div>
                            
                        
                        
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- Call to action section-->
            <section class="py-5 bg-gradient-primary-to-secondary text-white">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                        <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ url('Contact') }}">Contact me</a>
                    </div>
                </div>
            </section>
@endsection