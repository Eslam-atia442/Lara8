@extends('adminLayouts.app')
@section('title')
    name
@endsection
@section('header')

@endsection


@section('content')

    {!! $dataTable->table() !!}

@endsection



@section('script')
    {!! $dataTable->scripts() !!}
@endsection

