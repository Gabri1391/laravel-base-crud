@extends('layouts.main')

@section('title', 'Edit comic')

@section('content')

<form action="{{ route('comics.store') }}" method="POST">
    @csrf
    <div class="card-title mt-5">
        <h1 class="text-center mb-3">Create here your custom Comic</h1>
    </div>

    <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Comic Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Titolo completo del Comic" name="title" value="{{ $comic->title }}">
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" placeholder="Price" name="price" value="{{ $comic->price }}">
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" placeholder="Series name" name="series" value="{{ $comic->series }}">
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" placeholder="What type of book is" name="type" value="{{ $comic->type }}">
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="6" placeholder="Describe your custom Comic" name="description">{{ $comic->description }}</textarea>
                    </div>
                </div>

            </div>
            <div class="card-footer d-flex justify-content-end align-items-center pb-3">
                <a class="btn btn-secondary me-2" href="{{ route('comics.index')}}">Go Back</a>
                <button type="reset" class="btn btn-danger me-2">Delete</button>
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
    </form>
</div>
    
@endsection