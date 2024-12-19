@extends('layouts.app')
@section('pagecontent')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/project.css') }}">
</head>
<body>
    <!-- Projects Section-->
    <section class="py-5 bg-black">
        <div class="container px-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                        @foreach($allprojects as $project)
                            <div class="category">
                                <img src="{{ $project->image }}" alt="{{ $project->name }}" width="150">
                                <div class="project-content">
                                    <h2>{{ $project->name }}</h2>
                                    <p class="description">{{ $project->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div> 
                </div>
            </div>
        </div>
    </section>
</body>
</html>
@endsection
