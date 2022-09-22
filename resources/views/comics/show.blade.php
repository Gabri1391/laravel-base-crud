@extends('home');

@section('title', $comic['title'])

@section('content')


<section class="card-details text-center container">
    <div class="wrapper d-flex align-items-center">
        <figure class="text-center mt-5">
            <img width="300px" src="{{ $comic['thumb']}}" alt="{{ $comic['title']}}">
        </figure>
        <div class="description me-3 ms-3">
           <h3>{{strtoupper($comic['title']) }}</h3>
           <div id="price">
            <p>US.PRICE: {{ $comic['price'] }}</p>
            <p>AVAILABLE</p>
           </div>
           <p>{{ $comic['description']}}</p>
        </div>
        <figure>
            <img src="{{ asset('/img/adv.jpg') }}" alt="advertising">
        </figure>
    </div>
    <div class="card-footer d-flex justify-content-end align-items-center pb-3">
        <a class="btn btn-secondary me-2" href="{{ route('comics.index')}}">GO BACK</a>
        <a class="btn btn-info text-white" href="{{ route('comics.edit', $comic->id)}}">EDIT COMIC</a>
    </div>
</section>

@endsection

