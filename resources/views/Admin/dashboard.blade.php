@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('roles\admin.css') }}">
@endpush

@section('title', 'Dashboard Admin')
@section('sidebar')
    @include('partials.sidebar')
@endsection