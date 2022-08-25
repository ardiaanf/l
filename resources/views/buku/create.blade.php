@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h4>Add New Book</h4>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary btn-sm mb-3" href="{{ route('buku.index') }}"> Back</a>
            </div>
        </div>
    </div>

      @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
      @endif

    <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

         <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Book Name</strong>
                    <input type="text" name="name" class="form-control" placeholder="Book name">
                   @error('name')
                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                   @enderror
                </div>
                <div class="form-group">
                    <strong>Description</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Enter Description"></textarea>
                    @error('description')
                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <strong>Penerbit</strong>
                    <input type="text" name="penerbit" class="form-control" placeholder="Enter penerbit">
                   @error('penerbit')
                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                   @enderror
                </div>
                <div class="form-group">
                    <strong>Book Cover:</strong>
                     <input type="file" name="cover_img" class="form-control" placeholder="Enter Cover book">
                    @error('cover_img')
                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                   @enderror
                </div>
            </div>
            <div class="pull-right">
                <button type="submit" class="btn btn-primary mt-3 ml-3">Save</button>
            </div>
        </div>

    </form>
@endsection
