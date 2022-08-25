@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h4>Pinjam Buku</h4>
            </div>
            <div class="form-group">
                <strong>Mahasiswa</strong><br>
                <label for="">Yang bernama
                    <span>
                        {{ Auth::user()->name }}
                    </span>
                </label>
            </div>
        </div>
    </div>

      @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
      @endif

    <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

         <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8 mt-3">
                <div class="form-group">
                    <strong>Book Name</strong><br>
                    <select name="" id="">
                        <option  class="form-select" aria-label="Default select example" value="">Please select data</option>
                        @foreach ($buku as $row)
                            <option name="id_buku" value="{{ $row->id_buku }}">{{ $row->name }}</option>
                         @endforeach
                    </select>

                </div>
                <div class="form-grup mt-3">
                    <strong>Tanggal pinjam</strong><br>
                    <input type="date" name="tgl_pinjam" class="form-control">
                </div>
                <div class="form-grup mt-3">
                    <strong>Tanggal Kembali</strong><br>
                    <input type="date" name="tgl_kembali" class="form-control">
                </div>

            </div>

            <div class="pull-right">
                <a class="btn btn-secondary btn-sm mt-3" href="{{ route('transaksi.index') }}"> Cancel</a>
                <button type="submit" class="btn btn-success btn-sm mt-3 ml-3">Pinjam</button>
            </div>
        </div>

    </form>
@endsection
