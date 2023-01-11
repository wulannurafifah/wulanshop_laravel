@extends('layout/login')

@section('title', 'Form Ubah Data Produk')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Form Ubah Data Produk</h3>
            
                <form method="post" action="/adproducts/{{$adproducts->id}}"><br>
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="product_cat" class="form-label">Kategori Produk</label>
                        <input type="text" class="form-control" id="product_cat" placeholder="Masukkan Kategori Produk" name="product_cat" value="{{$adproducts->product_cat}}">
                    </div>

                    <div class="mb-3">
                        <label for="product_brand" class="form-label">Brand Produk</label>
                        <input type="text" class="form-control" id="product_brand" placeholder="Masukkan Brand Produk" name="product_brand" value="{{$adproducts->product_brand}}">
                    </div>

                    <div class="mb-3">
                        <label for="product_title" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="product_title" placeholder="Masukkan Nama Produk" name="product_title" value="{{$adproducts->product_title}}">
                    </div>

                    <div class="mb-3">
                        <label for="product_price" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="product_price" placeholder="Masukkan Harga" name="product_price" value="{{$adproducts->product_price}}">
                    </div>

                    <div class="mb-3">
                        <label for="product_image" class="form-label">Gambar Produk</label>
                        <input type="text" class="form-control" id="product_image" placeholder="Masukkan Gambar Produk" name="product_image" value="{{$adproducts->product_image}}">
                    </div>

                    <div class="mb-3">
                        <label for="product_keywords" class="form-label">Keywords</label>
                        <input type="text" class="form-control" id="product_keywords" placeholder="Masukkan Keywords" name="product_keywords" value="{{$adproducts->product_keywords}}">
                    </div>
                    
                    <button type="submit">Ubah Data</button>
                </form>

        </div>
    </div>
</div>
@endsection
