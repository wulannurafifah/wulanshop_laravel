@extends('layout/login')

@section('title', 'Form Tambah Data Order')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Form Tambah Data Order</h3>
            
                <form method="post" action="/adorders"><br>
                    @csrf
                    <div class="mb-3">
                        <label for="user_id" class="form-label">User ID</label>
                        <input type="text" class="form-control" id="user_id" placeholder="Masukkan User ID" name="user_id">
                    </div>

                    <div class="mb-3">
                        <label for="product_id" class="form-label">Produk ID</label>
                        <input type="text" class="form-control" id="product_id" placeholder="Masukkan Produk ID" name="product_id">
                    </div>

                    <div class="mb-3">
                        <label for="qty" class="form-label">Jumlah Barang Yang Dibeli</label>
                        <input type="text" class="form-control" id="qty" placeholder="Masukkan Jumlah Barang Yang Dibeli" name="qty">
                    </div>

                    <div class="mb-3">
                        <label for="trx_id" class="form-label">No Pembelian</label>
                        <input type="text" class="form-control" id="trx_id" placeholder="Masukkan No Pembelian" name="trx_id">
                    </div>

                    <div class="mb-3">
                        <label for="p_status" class="form-label">Status Produk</label>
                        <input type="text" class="form-control" id="p_status" placeholder="Masukkan Status Produk" name="p_status">
                    </div>
            
                    <button type="submit">Tambah Data</button>
                </form>

        </div>
    </div>
</div>
@endsection
