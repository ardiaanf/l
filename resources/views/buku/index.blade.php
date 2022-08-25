@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>List Buku</h3>
                    <a href="{{-- route('buku.create') --}}" class="btn btn-primary mt-4 btn-sm pull-right">Create new books</a>
                </div>
                <div class="panel-body mt-3">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Penerbit</th>
                                <th>Tanggal Terbit</th>
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
                                <td><img src='{{Storage::url('public/posts/').$buku->cover_img }}'
                                        style='width:80px; height:50px;'></td>

                                <td>
                                    <a href="buku/edit/{{ $buku->id_buku }}" class="btn btn-success btn-xs">Edit</a>
                                    <a href="buku/destroy/{{ $buku->id_buku }}" class="btn btn-danger btn-xs">Hapus</a>
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
