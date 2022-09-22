@extends('layouts.main')

@section('title', 'Comics')


@section('content')

<section class="banner bg-dark">
    <div class="card-box d-flex flex-wrap container">
        @foreach ($comics as $comic)
        <div class="comics-card pt-5">
            <a href="{{ route('comics.show', $comic)}}">
                <figure class="text-center">
                    <img src="{{ asset ($comic['thumb']) }}" alt="">
                </figure>
            </a>
            <figcaption>
            <p style="width: 150px;" class="text-white">{{ strtoupper($comic['title']) }}</p>
            </figcaption>
        </div>
        @endforeach
    </div>
    <div class="mt-5 text-center pb-3">
        <a class="btn btn-primary text-white ms-2" href="#">LOAD MORE</a>
        <a class="btn btn-success text-white" href="{{ route('comics.create')}}">CREA UN COMIC</a>
    </div>
</section>

    
@endsection