@extends('adminLayouts.app')
@section('title')
    name
@endsection

@section('header')
@endsection


@section('content')
    <div class="card">
        <div class="card-body">
            {!! $dataTable->table() !!}
        </div>
    </div>
@endsection



@section('script')
    {!! $dataTable->scripts() !!}
@endsection

