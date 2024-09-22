@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Barang</h1>
    <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambah Barang</a>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang as $item)
            <tr>
                <td>{{ $loop->iteration }}</td> {{-- Ini akan menampilkan nomor urut --}}
                <td>{{ $item->nama_barang }}</td>
                <td>Rp. {{ number_format($item->harga, 0, ',', '.') }}</td>
                <td>{{ $item->stok }}</td>
                <td>
                    <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('barang.destroy', $item->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection