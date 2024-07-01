@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex flex-wrap">
           @foreach ($fumetti as $indice => $item)
           <div class="card" style="width: 18rem;">
            <img src="{{ $item['thumb'] }}" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="/about/{{ $indice }}"><h5 class="card-title">{{ $item['title'] }}</h5></a>
            </div>
          </div>
           @endforeach
        </div>
    </div>
</div>
@endsection