@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create student') }}</div>

                    <div class="card-body">
                        <form action="{{route('store.student')}}" method="POST">
                            @csrf
                            <div class="form-group mt-2">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter name">
                            </div>
                            <div class="form-group mt-2">
                                <label for="roll">Roll:</label>
                                <input type="text" class="form-control" name="roll" placeholder="Enter roll number">
                            </div>
                            <div class="form-group mt-2">
                                <label for="age">Age:</label>
                                <input type="number" class="form-control" name="age" placeholder="Enter age">
                            </div>
                            <div class="form-group mt-2">
                                <label for="gender">Gender:</label>
                                <select class="form-control" name="gender">
                                    <option value="">Select gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <label for="phone">Phone:</label>
                                <input type="tel" class="form-control" name="phone" placeholder="Enter phone number">
                            </div>
                            <div class="form-group mt-2">
                                <label for="district">District:</label>
                                <input type="text" class="form-control" name="district" placeholder="Enter district">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
