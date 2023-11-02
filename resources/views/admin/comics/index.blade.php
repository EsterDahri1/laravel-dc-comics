@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Admin index</h1>

        <a href="{{ route('comics.create') }}" class="btn btn-primary">ADD</a>

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
                                {{-- <a href=" {{ route('comics.show', $comic->id) }} " class="btn btn-outline-primary">View</a>
                                <a href=" {{ route('comics.edit', $comic->id) }} " class="btn btn-outline-success">Edit</a> --}}
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
