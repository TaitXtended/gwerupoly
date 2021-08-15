@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="breadcumb-area bg-img mb-5" style="background-image: url(/storage/img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Departments</h2>
        </div>
    </div>
    <div class="row justify-content-center mt-5 ">
        <div class="col-md-12">
            <div class="card" style="overflow-x: auto;">
                
                <div class="card-body">

                    @if (count($departments)>0)
                    <table class="table table-stripped">
                        <tr>
                            <th>Head Of Department </th>
                            <th>Vice Head Of Department</th>
                            <th>Department Name</th>
                            
                            <th>
                                <a href="/departments/create" class="btn btn-success">Add Department</a>
                            </th><th></th>
                        </tr>
                        @foreach ($departments as $department)
                            <tr>
                                <td>{{$department->hod}}</td>
                                <td>{{$department->vicehod}}</td>
                                <td>{{$department->department}}</td>
                                
                                <td><a href="/departments/{{$department->id}}/edit" class="btn btn-primary">edit</a></td>
                                
                                <td><a href="/departments/{{$department->id}}/delete" class="btn btn-danger"onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
                            </tr>
                        @endforeach
                   </table>
                @else
                <p>You have no departments yet.</p>
                    <a href="/departments/create" class="btn btn-success">Add Department</a>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
