@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>List Data Peminjaman</h3>
                    <a href="{{-- route('mahasiswa.create') --}}" class="btn btn-primary mt-4 btn-sm pull-right">Create new books</a>
                </div>
                <div class="panel-body mt-3">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Id Mahasiswa</th>
                                <th>Id Buku</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal kembali</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->id_mahasiswa }}</td>
                                <td>{{ $row->id_buku }}</td>
                                <td>{{ $row->tanggal_pinjam }}</td>
                                <td>{{ $row->tangga_kembali }}</td>
                                <td>
                                    <a href="transaksi/edit/{{ $row->id }}" class="btn btn-success btn-xs">Edit</a>
                                    <a href="transaksi/destroy/{{ $row->id }}" class="btn btn-danger btn-xs">Hapus</a>
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
