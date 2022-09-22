@extends('layouts.main')

@section('title', 'Comics')


@section('content')

<section class="banner bg-dark">
    <div class="card-box d-flex flex-wrap container">
        @forelse($comics as $comic)
        <div class="col-3 text-center align-items-center my-4 text-white">
            <a href="{{ route('comics.show', $comic->id) }}">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="comics">
            </a>
            <strong>
                <p class="mt-4">{{ $comic->series }}</p>
            </strong>
            <p>{{ $comic->title }}</p>
            <p>{{ $comic->type }}</p>
            <p>{{ $comic->price }}</p>
            <p>{{ $comic->sale_date }}</p>
        </div>
    @empty
        <h2>No Comics found</h2>
    @endforelse
</div>
    </div>
    <div class="mt-5 text-center pb-3">
        <a class="btn btn-primary text-white ms-2" href="#">LOAD MORE</a>
        <a class="btn btn-success text-white" href="{{ route('comics.create')}}">CREA UN COMIC</a>
    </div>
</section>

    
@endsection