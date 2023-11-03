@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Admin index</h1>

        @if (session('message'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Success!</strong> {{ session('message') }}
            </div>
        @endif

        <a href="{{ route('comics.create') }}" class="btn btn-primary mb-3 text-end">ADD</a>

        <div class="table-responsive">
            <table class="table table-primary table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Series</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse ($comics as $comic)
                        <tr>
                            <td scope="row"> {{ $comic->id }} </td>
                            <td> {{ $comic->title }} </td>

                            <td>
                                @if (str_contains($comic->thumb, 'http'))
                                    <img width="100" class=" img-fluid" src="{{ $comic->thumb }}">
                                @else
                                    <img width="100" class=" img-fluid" src="{{ asset('storage/' . $comic->thumb) }}"
                                        alt="">
                                @endif
                            </td>

                            <td> {{ $comic->series }} </td>
                            <td>
                                <a href=" {{ route('comics.show', $comic->id) }} " class="btn btn-outline-primary">View</a>
                                <a href=" {{ route('comics.edit', $comic->id) }} " class="btn btn-outline-success">Edit</a>


                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                    data-bs-target="#modalId-{{ $comic->id }}">
                                    Delete
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="modalId-{{ $comic->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="modalTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitleId">Delete comic number
                                                    {{ $comic->id }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Attention! This is a destructive operation that cannot be undone.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    @empty
                        No comics yet
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
