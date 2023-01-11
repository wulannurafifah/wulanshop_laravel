@extends('layout/login')

@section('title', 'Form Tambah Data Order Produk')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Form Tambah Data Order Produk</h3>
            
                <form method="post" action="/adorderproducts"><br>
                    @csrf
                    <div class="mb-3">
                        <label for="order_pro_id" class="form-label">Order Produk ID</label>
                        <input type="text" class="form-control" id="order_pro_id" placeholder="Masukkan Nomor Order Produk ID" name="order_pro_id">
                    </div>

                    <div class="mb-3">
                        <label for="order_id" class="form-label">Order ID</label>
                        <input type="text" class="form-control" id="order_id" placeholder="Masukkan Order ID" name="order_id">
                    </div>

                    <div class="mb-3">
                        <label for="product_id" class="form-label">Produk ID</label>
                        <input type="text" class="form-control" id="product_id" placeholder="Masukkan Produk ID" name="product_id">
                    </div>

                    <div class="mb-3">
                        <label for="qty" class="form-label">Jumlah Barang</label>
                        <input type="text" class="form-control" id="qty" placeholder="Masukkan Jumlah Barang" name="qty">
                    </div>

                    <div class="mb-3">
                        <label for="jml" class="form-label">Total Harga Barang</label>
                        <input type="text" class="form-control" id="jml" placeholder="Masukkan Total Harga Barang" name="jml">
                    </div>
            
                    <button type="submit">Tambah Data</button>
                </form>

        </div>
    </div>
</div>
@endsection
