@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Product</div>
                        <img src="{{asset('images')}}/{{$food->image}}" class="img-responsive">
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Details</div>

                    <div class="card-body">
                        <h2>{{$food->name}}</h2>
                        <p class="lead">{{$food->description}}</p>
                        <p>BDT. {{$food->price}}</p>
                        <button class="btn btn-outline-success">Call for Order: 01722012905</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
