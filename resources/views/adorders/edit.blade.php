@extends('layout/login')

@section('title', 'Form Ubah Data Order')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Form Ubah Data Order</h3>
            
                <form method="post" action="/adorders/{{ $adorders->id }}"><br>
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="user_id" class="form-label">User ID</label>
                        <input type="text" class="form-control" id="user_id" placeholder="Masukkan User ID" name="user_id" value="{{$adorders->user_id}}">
                    </div>

                    <div class="mb-3">
                        <label for="product_id" class="form-label">Produk ID</label>
                        <input type="text" class="form-control" id="product_id" placeholder="Masukkan Produk ID" name="product_id" value="{{$adorders->product_id}}">
                    </div>

                    <div class="mb-3">
                        <label for="qty" class="form-label">Jumlah Barang Yang Dibeli</label>
                        <input type="text" class="form-control" id="qty" placeholder="Masukkan Jumlah Barang Yang Dibeli" name="qty" value="{{$adorders->qty}}">
                    </div>

                    <div class="mb-3">
                        <label for="trx_id" class="form-label">No Pembelian</label>
                        <input type="text" class="form-control" id="trx_id" placeholder="Masukkan No Pembelian" name="trx_id" value="{{$adorders->trx_id}}">
                    </div>

                    <div class="mb-3">
                        <label for="p_status" class="form-label">Status Produk</label>
                        <input type="text" class="form-control" id="p_status" placeholder="Masukkan Status Produk" name="p_status" value="{{$adorders->p_status}}">
                    </div>
                    <button type="submit">Ubah Data</button>
                </form>

        </div>
    </div>
</div>
@endsection
