@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Your Result</div>

                    <div class="card-body">
                        <div class="card text text-center bg-warning p-2 text-dark bg-opacity-10">
                            <h5>Your height is <span class="fw-bold">{{$height}}</span>  cm,
                                Your weight is <span class="fw-bold">{{$weight}}</span> kg</h5> <br>
                                Your Body Mass Index is <span class="fw-bold">{{$bmiPass}}</span> <br>
                            <a class="btn btn-warning" href="{{ route('forma') }}">Try Again!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
