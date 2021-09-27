@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="breadcumb-area bg-img mb-5" style="background-image: url(/storage/img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Courses And Levels Offered</h2>
        </div>
    </div>
    <div class="row justify-content-center mt-5 ">
        <div class="col-md-12">
            <div class="card" style="overflow-x: auto;">
                
                <div class="card-body">

                    @if (count($levels)>0)
                    <table class="table table-stripped">
                        <tr>
                            <th>Course Name</th>
                            <th>Level</th>
                            <th>Qualifications </th>
                            <th>Modules </th>
                            <th>
                                <a href="/levels/create" class="btn btn-success">Add Level</a>
                            </th><th></th>
                        </tr>
                        @foreach ($levels as $level)
                            <tr>
                                <td>{{$level->course}}</td>
                                <td>{{$level->level}}</td>
                                <td>{{$level->qualifications}}</td>
                                <td>{{$level->modules}}</td>
                                
                                <td><a href="/levels/{{$level->id}}/edit" class="btn btn-primary">edit</a></td>
                                
                                <td><a href="/levels/{{$level->id}}/delete" class="btn btn-danger"onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
                            </tr>
                        @endforeach
                   </table>
                @else
                <p>You have no levels yet.</p>

                <a href="/levels/create" class="btn btn-success">Add Level</a>
                    
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
