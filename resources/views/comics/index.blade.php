@extends('layouts.main')

@section('title', 'Comics')


@section('content')

<section class="banner bd-dark">
    <div class="card-box container">
        @foreach ($comics as $comic)
        <div class="comics-card pt-5">
            <a href="{{ route('comics.index')}}">
                <figure>
                    <img src="{{ asset ($comic['thumb']) }}" alt="">
                </figure>
                <figcaption>
                <p>{{ strtoupper($comic['title']) }}</p>
                </figcaption>
            </a>
        </div>
        @endforeach
    </div>
    <div class="button-load">
        <a href="#">LOAD MORE</a>
    </div>
</section>

    
@endsection