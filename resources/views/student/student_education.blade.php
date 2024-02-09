@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header text-center">{{ __('Add Education') }}</div>
                            <div class="card-body">
                                <p class="fw-bold">Student ID: {{$student->id}}</p>
                                <p class="fw-bold">Name: {{$student->name}}</p>
                                <form action="{{route('education.add',['studentId'=>$student->id])}}" method="POST">
                                    @csrf
                                    <div class="form-group mt-2">
                                        <label for="degree">Degree:</label>
                                        <input type="text" class="form-control" name="degree"
                                               placeholder="Enter degree">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="passingYear">Passing year:</label>
                                        <input type="number" class="form-control" name="passingYear"
                                               placeholder="Enter Passing year">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="institution">Institution:</label>
                                        <input type="text" class="form-control" name="institution"
                                               placeholder="Enter institution">
                                    </div>

                                    <button type="submit" class="btn btn-info mt-3 mb-3">Add Education</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header text-center">{{ __('Educations') }}</div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Degree ID</th>
                                        <th>Name</th>
                                        <th>Degree</th>
                                        <th>Passing Year</th>
                                        <th>Institute</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($educations as $education)
                                        <tr>
                                            <td>{{$education->id}}</td>
                                            <td>{{ $education->student ? $education->student->name : 'No Student' }}</td>
                                            <td>{{$education->degree}}</td>
                                            <td>{{$education->passingYear}}</td>
                                            <td>{{$education->institution}}</td>
                                            <td>
                                                <a href="{{route('education.edit',['id'=>$education->id])}}"
                                                   class="btn btn-primary me-1">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{route('education.delete',['id'=>$education->id])}}"
                                                      method="POST">
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
    </div>
@endsection
