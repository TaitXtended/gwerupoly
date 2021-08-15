@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="breadcumb-area bg-img mb-5" style="background-image: url(/storage/img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Manage 
                
    Students</h2>
        </div>
    </div>
    <div class="row justify-content-center mt-5 ">
        <div class="col-md-12">
            <div class="card" style="overflow-x: auto;">
                
                <div class="card-body">

                    @if (count($students)>0)
                    <table class="table table-stripped">
                        <tr>
                            <th>Student Name</th>
                            <th>Student Reg No</th>
                            <th>Course Name</th>
                            <th>Level</th>
                            <th>Study Mode</th>
                            <th>Enrollment Date</th>
                            <th></th><th></th>
                        </tr>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{$student->fname.' '.$student->surname}}</td>
                                <td>{{$student->regnum}}</td>
                                <td>{{$student->coursename}}</td>
                                <td>{{$student->level}}</td>
                                <td>{{$student->studymode}}</td>
                                <td>{{$student->created_at}}</td>
                                <td><a href="/students/{{$student->id}}" class="btn btn-primary">View Profile</a></td>
                                
                                <td><a href="/students/{{$student->id}}/delete" class="btn btn-danger"onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
                            </tr>
                        @endforeach
                   </table>
                @else
                <p>You have no students yet.</p>
                    
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
