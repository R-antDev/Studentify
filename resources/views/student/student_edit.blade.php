@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">{{ __('Edit student') }}</div>

                    <div class="card-body">
                        <form action="{{route('student.update',$id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group mt-2">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" value="{{$student->name}}">
                            </div>
                            <div class="form-group mt-2">
                                <label for="roll">Roll:</label>
                                <input type="text" class="form-control" name="roll" value="{{$student->roll}}">
                            </div>
                            <div class="form-group mt-2">
                                <label for="age">Age:</label>
                                <input type="number" class="form-control" name="age" value="{{$student->age}}">
                            </div>
                            <div class="form-group mt-2">
                                <label for="gender">Gender:</label>
                                <select class="form-control" name="gender">
                                    <option value="{{$student->gender}}">{{$student->gender}}</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <label for="phone">Phone:</label>
                                <input type="tel" class="form-control" name="phone" value="{{$student->phone}}">
                            </div>
                            <div class="form-group mt-2">
                                <label for="district">District:</label>
                                <input type="text" class="form-control" name="district" value="{{$student->district}}">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
