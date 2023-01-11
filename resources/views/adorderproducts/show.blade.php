@extends('layout/login')

@section('title', 'Order Products')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Detail Order Products</h3>
            
            <div class="card">
                <div class="card-body">
                  <p class="card-text">Order Produk ID      : {{$adorderproducts->order_pro_id}}</p>
                  <p class="card-text">Order ID             : {{$adorderproducts->order_id}}</p>
                  <p class="card-text">Produk ID            : {{$adorderproducts->product_id}}</p>
                  <p class="card-text">Jumlah Barang        : {{$adorderproducts->qty}}</p>
                  <p class="card-text">Total Harga Barang   : {{$adorderproducts->jml}}</p>
                  <a href="{{ $adorderproducts->id }}/edit">Edit</a>
                  <form action="/adorderproducts/{{ $adorderproducts->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                  </form>
                  <a href="/adorderproducts">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
