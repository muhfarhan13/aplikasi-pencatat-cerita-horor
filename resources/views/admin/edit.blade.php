@extends('layouts.master')

@section('title')

Data Cerita

@endsection

@section('page')

<div class="breadcrumb-item"><a href="{{ route('data-cerita') }}">Data Cerita</a></div>
    
@endsection

@section('content')

<div class="card-header p-5 bg-white">
    <div class="row">
        <div class="col-lg-7 m-auto">
            <form action="/datacerita/{{ $ceritas->id }}" method="post">
                @csrf 
                @method('PUT')
                <div class="input-group mb-3">
                    <input id="judul" type="text" class="form-control" name="judul" value="{{ old('judul', $ceritas->judul) }}"
                        required autocomplete="judul" autofocus placeholder="judul">
                </div>
                <div class="mb-3">
                    <textarea id="summernote" class="form-control" name="deskripsi" rows="5">{{ old('deskripsi', $ceritas->deskripsi) }}</textarea>
                </div>
                
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection