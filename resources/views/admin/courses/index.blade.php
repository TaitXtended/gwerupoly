@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="breadcumb-area bg-img mb-5" style="background-image: url(/storage/img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Courses Offered</h2>
        </div>
    </div>
    <div class="row justify-content-center mt-5 ">
        <div class="col-md-12">
            <div class="card" style="overflow-x: auto;">
                
                <div class="card-body">

                    @if (count($courses)>0)
                    <table class="table table-stripped">
                        <tr>
                            <th>Course Code </th>
                            <th>Course Name</th>
                            <th>Department </th>
                            
                            <th>
                                <a href="/courses/create" class="btn btn-success">Add Course</a>
                            </th><th></th>
                        </tr>
                        @foreach ($courses as $course)
                            <tr>
                                <td>{{$course->coursecode}}</td>
                                <td>{{$course->coursename}}</td>
                                <td>{{$course->department}}</td>
                                
                                <td><a href="/courses/{{$course->id}}/edit" class="btn btn-primary">edit</a></td>
                                
                                <td><a href="/courses/{{$course->id}}/delete" class="btn btn-danger"onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
                            </tr>
                        @endforeach
                   </table>
                @else
                <p>You have no courses yet.</p>

                <a href="/courses/create" class="btn btn-success">Add Course</a>
                    
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
