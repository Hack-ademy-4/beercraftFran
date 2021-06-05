@extends('app')
@section('content')

<div class="container py-5 ">
    <div class="row">
    @foreach($breweries as $brewery)
        <div class="col-lg-6">
            <div class="card" >
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$brewery['nombre']}}</h5>
                    <p class="card-text">{{$brewery['desc']}}</p>
                    <p class="card-text">{{$brewery['aforo']}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
