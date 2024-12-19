<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Project</title>
    <!-- Link to the custom CSS file -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <!-- Optional: Include Bootstrap (if needed) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Project
                        <a href="{{ url('AddProject/create') }}" class="btn btn-primary float-end">Add Project </a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Is Active</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allprojects as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->description}}</td>
                                <td>
                                    <img src="{{ asset($item->image) }}" style="width: 70px; height:70px;" alt="Img" />
                                </td>
                                <td>
                                    @if ($item->is_active)
                                        Active
                                    @else
                                        In-Active
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('AddProject/'.$item->id.'/edit') }}" class="btn btn-success mx-2">Edit</a>

                                    <a
                                        href="{{ url('AddProject/'.$item->id.'/delete') }}"
                                        class="btn btn-danger mx-1"
                                        onclick="return confirm('Are you sure ?')"
                                    >
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>