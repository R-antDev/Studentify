@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-info fw-bold text-center">{{ __('Update Education Information') }}</div>
                    <div class="card-body">
                        <p class="fw-bold">Student ID: {{$edu->student_id}}</p>
                        <p class="fw-bold">Name: {{$edu->student ? $edu->student->name : 'No Student'}}</p>
                        <form action="{{route('education.update',$edu->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group mt-2">
                                <label for="degree">Degree:</label>
                                <input type="text" class="form-control" name="degree"
                                       value="{{$edu->degree}}">
                            </div>
                            <div class="form-group mt-2">
                                <label for="passingYear">Passing year:</label>
                                <input type="number" class="form-control" name="passingYear"
                                       value="{{$edu->passingYear}}">
                            </div>
                            <div class="form-group mt-2">
                                <label for="institution">Institution:</label>
                                <input type="text" class="form-control" name="institution"
                                       value="{{$edu->institution}}">
                            </div>

                            <button type="submit" class="btn btn-info mt-3 mb-3">Update Education</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
