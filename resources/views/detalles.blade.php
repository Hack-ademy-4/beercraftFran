@extends('app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h3>Old Town</h3>
        </div>
    </div>
</div>
<div class="container py-5 ">
    <div class="row">
        @foreach($lots as $lot)
        <div class="col-lg-6">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$lot['nombre']}}</h5>
                    <p class="card-text">{{$lot['desc']}}</p>
                    <p class="card-text">@if($lot['cantidad'] != 0){{$lot['cantidad']}}
                        @else
                        <div class="col-12">
                            <h2>
                                No hay cerveza
                            </h2>
                        </div>
                        @endif
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
