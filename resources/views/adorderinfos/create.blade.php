@extends('layout/login')

@section('title', 'Form Tambah Data Order Info')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Form Tambah Data Order Info</h3>
            
                <form method="post" action="/adorderinfos"><br>
                    @csrf
                    <div class="mb-3">
                        <label for="id_user" class="form-label">User ID</label>
                        <input type="text" class="form-control" id="id_user" placeholder="Masukkan Nomor User ID" name="id_user">
                    </div>

                    <div class="mb-3">
                        <label for="first_name" class="form-label">Nama Awal</label>
                        <input type="text" class="form-control" id="first_name" placeholder="Masukkan Nama Awal" name="first_name">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat Lengkap</label>
                        <input type="text" class="form-control" id="address" placeholder="Masukkan Alamat Lengkp" name="address">
                    </div>

                    <div class="mb-3">
                        <label for="jumlah_produk" class="form-label">Jumlah Produk</label>
                        <input type="text" class="form-control" id="jumlah_produk" placeholder="Masukkan Jumlah Produk" name="jumlah_produk">
                    </div>

                    <div class="mb-3">
                        <label for="total_harga" class="form-label">Total Harga</label>
                        <input type="text" class="form-control" id="total_harga" placeholder="Masukkan Total Harga" name="total_harga">
                    </div>
            
                    <button type="submit">Tambah Data</button>
                </form>

        </div>
    </div>
</div>
@endsection
