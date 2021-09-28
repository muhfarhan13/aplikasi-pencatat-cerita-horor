@extends('layouts.master')

@section('title')

Data Cerita

@endsection

@section('page')

<div class="breadcrumb-item"><a href="{{ route('data-cerita') }}">Data Cerita</a></div>

@endsection

@section('content')

<div class="card-header bg-white p-5">
    <table class="table table-bordered table-responsive-lg table-hover mr-5">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="table-light">
            @forelse($ceritas as $cerita)
            <tr>
                <td>{{ $loop -> iteration }}</td>
                <td>{{ $cerita -> judul }}</td>
                <td class="pt-3">{!! $cerita-> deskripsi !!}</td>
                <td>
                    @if ($cerita -> status == 1)
                        <a href="/statuscerita/{{ $cerita -> id }}">
                            <span class="badge bg-success text-white">Aktif</span>
                        </a>
                    @else 
                        <a href="/statuscerita/{{ $cerita -> id }}">
                            <span class="badge bg-danger text-white">Tidak Aktif</span>
                        </a>
                    @endif
                </td>
                <td style="width: 20%">
                    <div class="btn-group" level="group" aria-label="Basic example">
                        <a href="/datacerita/{{ $cerita -> id }}/edit" class="btn btn-info btn-sm">
                            <i class="far fa-edit"></i>
                        </a>
                        <form action="/datacerita/{{ $cerita -> id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin hapus data ? ');">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" align="center">Data Tidak Ada</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{ $ceritas->links() }}
</div>


@endsection
