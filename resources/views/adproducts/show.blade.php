@extends('layout/login')

@section('title', 'Products')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Detail Products</h3>
            
            <div class="card">
                <div class="card-body">
                  <p class="card-text">Kategori Produk  : {{$adproducts->product_cat}}</p>
                  <p class="card-text">Brand Produk     : {{$adproducts->product_brand}}</p>
                  <p class="card-text">Nama Produk      : {{$adproducts->product_title}}</p>
                  <p class="card-text">Harga            : {{$adproducts->product_price}}</p>
                  <p class="card-text">Gambar Produk    : {{$adproducts->product_image}}</p>
                  <p class="card-text">Keywords         : {{$adproducts->product_keywords}}</p>
                  <a href="{{ $adproducts->id }}/edit">Edit</a>
                  <form action="/adproducts/{{ $adproducts->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                  </form>
                  <a href="/adproducts">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
