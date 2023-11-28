@extends('layputs.admin')

@section('content')
    <div class="container">

        @if (session('message'))
            <div class="alert alert-success" role="alert">
                <strong>Success!</strong> {{ session('message') }}
            </div>
        @endif

        <h1 class="text-white py-4">Dumbster</h1>

        <div class="table-responsive">
            <table class="table table-primary table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Series</th>
                        <th scope="col">Deleted</th>
                        <th>Options</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($deleted_comics as $deleted)
                        <tr class="">
                            <td scope="row"></td>
                            <td>R1C2</td>
                            <td>R1C3</td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
@endsection
