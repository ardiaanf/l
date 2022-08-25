@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Peminjaman Buku</h3>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success btn-sm" href="{{ route('transaksi.create') }}">Mau Pinjam</a>
                    </div>
                </div>

                <div class="panel-body mt-3">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Mahasiswa</th>
                                <th>Id Buku</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal kembali</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->id_mahasiswa }}</td>
                                <td>{{ $row->id_buku }}</td>
                                <td>{{ $row->tgl_pinjam }}</td>
                                <td>{{ $row->tgl_kembali }}</td>
                                <td>
                                    {{--@if($trans->tgl_kembali == null)
                                     <a href="transaksi/edit/{{ $trans->id }}"
                                        class="badge badge-primary">Pengembalian</a>
                                    @else
                                    <p class="badge badge-success">Dikembalikan</p>
                                    @endif --}}
                                </td>
                                <td>
                                    <a class="btn btn-success btn-sm"
                                        href="{{-- route('.edit',$post->id) --}}">Kembali</a>
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
