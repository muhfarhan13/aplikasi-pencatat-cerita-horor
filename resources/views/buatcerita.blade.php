@extends('layouts.anonim')

@section('content')

<h2 class="text-capitalize mt-5 mb-4 text-white">Buat cerita
    <hr color="white">
</h2>
<form method="POST" action="{{ route('simpan-cerita') }}">
    @csrf
    <div class="card">    
        <div class="input-group mb-3">
            <input id="judul" type="text" class="form-control" name="judul" required placeholder="Judul Cerita">
        </div>
        <div class="mb-3">
            <textarea id="summernote" class="form-control" name="deskripsi" rows="5"></textarea>
        </div>
    </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-secondary">
                Tambah
            </button>
        </div>

</form>

@endsection
