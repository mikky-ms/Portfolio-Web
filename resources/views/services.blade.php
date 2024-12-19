@extends('layouts.app')
@section('pagecontent')
<!-- Service Section-->
<section class="py-5 bg-black" id="Service">
    <div class="container">
        <div class="col-12 text-center">
            <h2 class="display-5 fw-bolder">
                <span class="text-gradient d-inline">Services</span>
            </h2>
        </div>

        <div class="row justify-content-center my-5">
            <!-- Card 1 -->
            <div class="col-sm-12 col-md-5 col-lg-5 m-2">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="https://nextcloud.mikky.my.id">
                            <img class="w-100" src="{{ asset('images/NC.png') }}" alt="Next Cloud" />
                        </a>
                        <h5 class="card-title">Cloud Storage</h5>
                        <p class="card-text">I can design websites using HTML, CSS, and JavaScript.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-sm-12 col-md-5 col-lg-5 m-2">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="https://wiki.mikky.my.id">
                            <img class="w-100" src="{{ asset('images/wiki.png') }}" alt="Wikipedia" />
                        </a>
                        <h5 class="card-title">Lab Riset</h5>
                        <p class="card-text">I am learning the backend of software development.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-sm-12 col-md-5 col-lg-5 m-2">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="https://192.168.10.124:8006">
                            <img class="w-100" src="{{ asset('images/proxmox.png') }}" alt="proxmox" />
                        </a>
                        <h5 class="card-title">Linux Server</h5>
                        <p class="card-text">
                            I am learning web development in PHP through OSTAD. I have studied arrays, object-oriented programming, functions, and more.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
