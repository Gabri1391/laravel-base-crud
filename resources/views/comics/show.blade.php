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
</section>
<div class="d-flex mb-3"> 
    <a class="btn btn-info text-white me-2" href="{{ route('comics.edit', $comic->id)}}">EDIT COMIC</a>
    <form action="{{ route('comics.destroy', $comic->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">DELETE</button>
    </form>
</div>

@endsection

