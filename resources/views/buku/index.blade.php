@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>List Buku</h3>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success btn-sm" href="{{ route('buku.create') }}"> Create New Book</a>
                    </div>
                </div>
                <div class="panel-body mt-3">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Penerbit</th>
                                <th>Cover Buku</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $buku)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $buku->name }}</td>
                                <td>{{ $buku->description }}</td>
                                <td>{{ $buku->penerbit }}</td>
                                <td><img src='{{ Storage::url($buku->cover_img) }}'
                                        style='width:80px; height:50px;'></td>

                                <td>
                                    <form action="{{ route('buku.destroy',$buku->id) }}" method="POST">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
