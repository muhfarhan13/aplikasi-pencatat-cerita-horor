@extends('layouts.master')

@section('title')
    
Dashboard

@endsection

@section('content')
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="fas fa-book-open"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Cerita</h4>
                </div>
                <div class="card-body">
                    {{ $ceritas }}
                </div>
            </div>
        </div>
    </div>
@endsection