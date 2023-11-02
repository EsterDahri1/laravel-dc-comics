@extends('layouts.admin')

@section('content')
    <section>
        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label text-capitalize">title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Insert a title"
                    aria-describedby="helpId">
                <small id="titleHelper" class="text-muted">Insert a title</small>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label text-capitalize">Image</label>
                <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Insert an image"
                    aria-describedby="helpId">
                <small id="thumbHelper" class="text-muted">Insert an image</small>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label text-capitalize">series</label>
                <input type="text" name="series" id="series" class="form-control" placeholder="insert a series"
                    aria-describedby="helpId">
                <small id="seriesHelper" class="text-muted">Insert a series</small>
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
            <a href="{{ route('comics.index') }}" class="text-decoration-none btn btn-primary">See the list</a>
        </form>
    </section>
@endsection
