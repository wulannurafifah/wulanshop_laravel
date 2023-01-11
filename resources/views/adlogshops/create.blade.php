@extends('layout/login')

@section('title', 'Form Tambah Data Histori Pembelian')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Form Tambah Data Histori Pembelian</h3>
            
                <form method="post" action="/adlogshops"><br>
                    @csrf
                    <div class="mb-3">
                        <label for="user_id" class="form-label">User ID</label>
                        <input type="text" class="form-control" id="user_id" placeholder="Masukkan User ID" name="user_id">
                    </div>

                    <div class="mb-3">
                        <label for="action" class="form-label">Barang Yang Dibeli</label>
                        <input type="text" class="form-control" id="action" placeholder="Masukkan Barang Yang Dibeli" name="action">
                    </div>

                    <div class="mb-3">
                        <label for="date" class="form-label">Tanggal Pembelian</label>
                        <input type="text" class="form-control" id="date" placeholder="Masukkan Tanggal Pembelian" name="date">
                    </div>
            
                    <button type="submit">Tambah Data</button>
                </form>

        </div>
    </div>
</div>
@endsection
