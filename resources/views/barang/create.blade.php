@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Barang</h1>

        <form action="{{ route('barang.store') }}" method="POST" onsubmit="return validateForm()">
            @csrf
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" name="stok" id="stok" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>

        <script>
            function validateForm() {
                const harga = document.getElementById('harga').value;
                const stok = document.getElementById('stok').value;

                if (isNaN(harga) || harga < 0) {
                    alert('Harga harus berupa angka yang valid.');
                    return false;
                }

                if (isNaN(stok) || stok < 0) {
                    alert('Stok harus berupa angka yang valid.');
                    return false;
                }

                return true;
            }
        </script>
    </div>
@endsection
