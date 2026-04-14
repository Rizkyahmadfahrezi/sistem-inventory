<head>
    <link rel="stylesheet" href="{{ asset('css/component/sidebar.css') }}">
</head>
<aside class="sidebar">
    <img src="{{ asset('images/Logo Sinar Jaya Inventory.png') }}" alt="logo">
    <ul class="menu">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Barang</a></li>
        <li><a href="">Transaksi</a></li>
        <li><a href="">Laporan</a></li>
        <li><a href="">User Management</a></li>
    </ul>
    <ul class="setting">
        <li><a href="">Settings</a></li>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </ul>
</aside>
