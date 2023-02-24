@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">KMI Calculator</div>

                    <div class="card-body">
                        <form method="post" action="{{ route("rezultatas") }}">
                            @csrf
                            <div class="mb-3">
                                <input class="form-control text-center" class="input" name="height" type="text" placeholder="Please, enter Your height in centimeters!">
                                <input class="form-control mt-3 text-center" class="input" name="weight" type="text" placeholder="Please, enter Your weight in kilograms">
                            </div>
                            <button class="btn btn-warning text-dark mt-3" type="submit">Calculate</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
