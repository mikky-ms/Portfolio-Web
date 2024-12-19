@extends('layouts.app')
@section('pagecontent')
<!-- Projects Section-->
<section class="bg-black py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline text-white">About Me</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6 col-xl-9 col-xxl-8 col-md-6">
                <div class="about-title">
                    <h2 class="text-white">Muhammad Naufal Nafiis</h2>
                </div>
                <div class="py-3 about-text text-white text-justify">
                    <p>
                        I am a student at Electronic Engineering Polytechnic Institute of Surabaya, majoring in Internet Engineering Technology. I have a strong interest in Network Engineering, especially in Network Infrastructure, Security Engineering, and Cyber Security. In addition, I am also very interested in the development of Internet of Things (IoT) and Cloud Computing technologies.
                    </p>
                </div>
            </div>

            <div class="col-lg-6 col-xl-9 col-xxl-8 mt-5 col-md-6">
                <!-- Experience Section-->
                <section>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                    </div>

                    <!-- Experience Card -->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <!-- Experience 1 -->
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5 text-justify">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">Agust 2022 - December 2022</div>
                                        <div class="small fw-bolder">IT Helper</div>
                                        <div class="small text-muted">CV. MAJPRIMA GRAHA UTAMA</div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>I am working as a IT Helper, As an IT Helper, I provide basic technical support to users by troubleshooting hardware and software issues, setting up devices, and ensuring smooth daily IT operations. I assist with network connectivity problems, perform system updates, and maintain IT equipment. My goal is to resolve technical problems quickly and support the IT team in delivering efficient technology solutions.</div>
                                </div>
                            </div>
                        </div>
                        <!-- Experience 2 -->
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5 text-justify">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">Agust 2023 - Present</div>
                                        <div class="small fw-bolder">Head of Science</div>
                                        <div class="small text-muted">Dirgantara PENS </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>As the Head of Science at Dirgantara Pens, I lead educational programs on aviation and Unmanned Aerial Vehicles (UAVs), guiding the community in exploring aerodynamics, engineering, and aerospace technology. My responsibilities include mentoring members, managing innovative projects, organizing workshops, and finding expert speakers to share insights on aerospace science.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Education Section-->
                <section>
                    <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                    <!-- Education Card 1-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5 text-justify">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">2019 - 2022</div>
                                        <div class="mb-2">
                                            <h5>Computer and Network Engineering</h5>
                                            <div class="small fw-bolder">Maskumambang Vocational High School 1</div>
                                            <div class="small text-muted">Gresik, Indonesia</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Education Card 2-->

                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5 text-justify">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">2022 - Present</div>
                                        <div class="mb-2">
                                            <h5>Internet Engineering Technology</h5>
                                            <div class="small fw-bolder">Electronic Engineering Polytechnic Institute of Surabaya</div>
                                            <div class="small text-muted">Surabaya, Indonesia</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Skills Section-->
                    <section>
                        <!-- Skillset Card-->
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <!--  skills -->
                                <div class="mb-0">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Skills </span></h3>
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-3 mb-4">
                                        <div class="col mb-4 mb-md-0">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100 text-justify">Cloud Computing</div>
                                        </div>
                                        <div class="col mb-4 mb-md-0">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100 text-justify">Linux Server</div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100 text-justify">Hosting Services</div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100 text-justify">Web Hosting</div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100 text-justify">Project Planning</div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100 text-justify">Internet of Things (IoT)</div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100 text-justify">Web Development</div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100 text-justify">Cybersecurity</div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100 text-justify">Network Administration</div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100 text-justify">Deep Learning</div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100 text-justify">Python (Programming Language)</div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100 text-justify">Machine Learning</div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100 text-justify">Project Management</div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100 text-justify">Curriculum Development</div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100 text-justify">Learning Management</div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100 text-justify">Network Infrastructure</div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100 text-justify">Research Skills</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
        </div>
    </div>
</section>
@endsection
