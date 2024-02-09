@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">{{ __('Students list') }}</div>

                    <div class="card-body">

                        <div class="container">
                            <h2 class="text-center mt-4">Student Information Table</h2>
                            <hr>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Roll</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Phone</th>
                                    <th>District</th>
                                    <th>Created By</th>
                                    <th>Updated By</th>
                                    <th>Education</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $students as $student )
                                    <tr>
                                        <td>{{$student->id}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->roll}}</td>
                                        <td>{{$student->age}}</td>
                                        <td>{{$student->gender}}</td>
                                        <td>{{$student->phone}}</td>
                                        <td>{{$student->district}}</td>
                                        <td>{{$student->user->name}}</td>
                                        <td>{{$student->updated_by}}</td>
                                        <td>
                                            <a href="{{route('student.education', $student->id)}}" class="btn btn-info me-1">View Education</a>
                                        </td>
                                        <td>
                                            <a href="{{route('student.edit', $student->id)}}" class="btn btn-primary me-1">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{route('student.delete', $student->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
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
    </div>

@endsection
