@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>List Mahasiswa</h3>
                    <a href="{{-- route('mahasiswa.create') --}}" class="btn btn-primary mt-4 btn-sm pull-right">Create new books</a>
                </div>
                <div class="panel-body mt-3">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nama Mahasiswa</th>
                                <th>Jenis kelamin</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $mahasiswa)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $mahasiswa->nama_mahasiswa }}</td>
                                <td>{{ $mahasiswa->jenis_kelamin }}</td>
                                <td>{{ $mahasiswa->alamat }}</td>
                                <td>{{ $mahasiswa->no_telp }}</td>

                                <td>
                                    <a href="mahasiswa/edit/{{ $mahasiswa->id_mahasiswa }}" class="btn btn-success btn-xs">Edit</a>
                                    <a href="mahasiswa/destroy/{{ $mahasiswa->id_buku }}" class="btn btn-danger btn-xs">Hapus</a>
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
