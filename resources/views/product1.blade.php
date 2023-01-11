@extends('layout/home')

@section('title', 'Detail Produk')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Detail Produk</h3>
            
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$adproducts -> product_title}}</h5>
                  <img src="{images/gambar.png}" style="width:60%"><br><br>
                  <b><p class="card-text">Kategori Produk : {{$adproducts->product_cat}}</p></b>
                  <b><p class="card-text">Brand           : {{$adproducts->product_brand}}</p></b>
                  <b><p class="card-text">Nama Produk     : {{$adproducts->product_title}}</p></b>
                  <b><p class="card-text">Harga           : Rp. {{$adproducts->product_price}}</p></b>
                  <b><p class="card-text">Keyword         : {{$adproducts->product_keywords}}</p></b><br><br>
                  <a href="/checkout" type="button" class="btn btn-success">Beli</a>
                  <a href="/menu">Kembali</a>
                </div>
              </div>

        </div>
    </div>
</div>
@endsection

