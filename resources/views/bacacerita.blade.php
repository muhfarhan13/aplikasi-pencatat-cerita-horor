@extends('layouts.anonim')

@section('content')

@if ($ceritas -> status == 1)
<div class="card mt-5">
    <div class="card-header text-white pt-3" style="background-color: #4c514f;">
        <h3>{{ $ceritas->judul }}</h3>
    </div>
    <div class="card-body table-responsive" style="background-color:#dadbdd; font-size: 15px;">
        <p>{!! $ceritas->deskripsi !!}</p>
    </div>
</div>
@else
    <div class="container text-center" style="margin-top: 7em">
        <span class="text-white">BUKU TIDAK ADA</span>
    </div>
@endif

@endsection
