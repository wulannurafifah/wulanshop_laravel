@extends('layout/login')

@section('title', 'Form Tambah Brands')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Form Tambah Brands</h3>
            
                <form method="post" action="/adbrands"><br>
                    @csrf
                    <div class="mb-3">
                        <label for="brand_title" class="form-label">Nama Brands</label>
                        <input type="text" class="form-control" id="brand_title" placeholder="Masukkan Nama Brands" name="brand_title">
                    </div>

                    <button type="submit">Tambah Data</button>
                </form>

        </div>
    </div>
</div>
@endsection
