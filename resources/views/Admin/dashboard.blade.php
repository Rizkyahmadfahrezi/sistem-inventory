@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/roles/Admin/admin.css') }}">
@endpush

@section('title', 'Dashboard Admin')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="container-row">
        <div class="card sales-overview">
            <h3 class="overview-title">Ringkasan Penjualan</h3>

            <div class="overview-grid">
                <!-- Item 1: Sales -->
                <div class="overview-item">
                    <div class="icon-wrapper blue">
                        <i class="fas fa-shopping-cart"></i> <!-- Ganti ikon sesuai kebutuhan -->
                    </div>
                    <div class="text-wrapper">
                        {{-- <span class="value">{{ number_format($salesCount) }}</span> --}}
                        <span class="label">Penjualan</span>
                    </div>
                </div>

                <!-- Item 2: Revenue -->
                <div class="overview-item">
                    <div class="icon-wrapper purple">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="text-wrapper">
                        {{-- <span class="value">Rp {{ number_format($revenue, 0, ',', '.') }}</span> --}}
                        <span class="label">Pendapatan</span>
                    </div>
                </div>

                <!-- Item 3: Profit -->
                <div class="overview-item">
                    <div class="icon-wrapper orange">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <div class="text-wrapper">
                        {{-- <span class="value">Rp {{ number_format($profit, 0, ',', '.') }}</span> --}}
                        <span class="label">Keuntungan</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card inventory-summary">
            <h3 class="overview-title">Ringkasan Inventaris</h3>

            <div class="overview-grid">
                <!-- Item 1: Jumlah Barang -->
                <div class="overview-item">
                    <div class="icon-wrapper blue">
                        <i class="fas fa-shopping-cart"></i> <!-- Ganti ikon sesuai kebutuhan -->
                    </div>
                    <div class="text-wrapper">
                        {{-- <span class="value">{{ number_format($salesCount) }}</span> --}}
                        <span class="label">Jumlah Barang</span>
                    </div>
                </div>

                <!-- Item 2: Akan Diterima -->
                <div class="overview-item">
                    <div class="icon-wrapper purple">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="text-wrapper">
                        {{-- <span class="value">Rp {{ number_format($revenue, 0, ',', '.') }}</span> --}}
                        <span class="label">Akan Diterima</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card purchase-overview">
            <h3 class="overview-title">Ringkasan Pembelian</h3>

            <div class="overview-grid">
                <!-- Item 1: Purchase -->
                <div class="overview-item">
                    <div class="icon-wrapper blue">
                        <i class="fas fa-shopping-cart"></i> <!-- Ganti ikon sesuai kebutuhan -->
                    </div>
                    <div class="text-wrapper">
                        {{-- <span class="value">{{ number_format($salesCount) }}</span> --}}
                        <span class="label">Pembelian</span>
                    </div>
                </div>

                <!-- Item 2: Cost -->
                <div class="overview-item">
                    <div class="icon-wrapper purple">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="text-wrapper">
                        {{-- <span class="value">Rp {{ number_format($revenue, 0, ',', '.') }}</span> --}}
                        <span class="label">Biaya Pembelian</span>
                    </div>
                </div>

                <!-- Item 3: Return -->
                <div class="overview-item">
                    <div class="icon-wrapper orange">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <div class="text-wrapper">
                        {{-- <span class="value">Rp {{ number_format($profit, 0, ',', '.') }}</span> --}}
                        <span class="label">Return</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card product-summary">
            <h3 class="overview-title">Ringkasan Produk</h3>

            <div class="overview-grid">
                <!-- Item 1: Jumlah Supplier -->
                <div class="overview-item">
                    <div class="icon-wrapper blue">
                        <i class="fas fa-shopping-cart"></i> <!-- Ganti ikon sesuai kebutuhan -->
                    </div>  
                    <div class="text-wrapper">
                        {{-- <span class="value">{{ number_format($salesCount) }}</span> --}}
                        <span class="label">Jumlah Supplier</span>
                    </div>
                </div>

                <!-- Item 2: Jumlah Kategori -->
                <div class="overview-item">
                    <div class="icon-wrapper purple">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="text-wrapper">
                        {{-- <span class="value">Rp {{ number_format($revenue, 0, ',', '.') }}</span> --}}
                        <span class="label">Jumlah Kategori</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card sales-grafik">
            <h2 class="card-title">Grafik Penjualan</h2>
        </div>
        <div class="card order-summary">
            <h2 class="card-title">Ringkasan Pesanan</h2>
        </div>
        <div class="card top-selling">
            <h2 class="card-title">Produk Terlaris</h2>
        </div>
        <div class="card low-quantity">
            <h2 class="card-title">Stok Menipis</h2>
        </div>
    </div>


@endsection

@section('footer')
    @include('partials.footer')
@endsection
