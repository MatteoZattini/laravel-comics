@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>More Info</h1>
            <div class="col-12">
                <div>
                    <img src="{{ $fumetto['thumb'] }}" alt="">
                </div>
                <div>
                    <h1>{{ $fumetto['title'] }}</h1>
                    <p>{{ $fumetto['description'] }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection