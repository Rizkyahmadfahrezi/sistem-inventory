@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/roles/admin.css') }}">
@endpush

@section('title', 'Dashboard Admin')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    
@endsection
