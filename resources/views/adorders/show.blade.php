@extends('layout/login')

@section('title', 'Order')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Detail Order</h3>
            
            <div class="card">
                <div class="card-body">
                  <p class="card-text">User ID                      : {{$adorders->user_id}}</p>
                  <p class="card-text">Produk ID                    : {{$adorders->product_id}}</p>
                  <p class="card-text">Jumlah Barang Yang Dibeli    : {{$adorders->qty}}</p>
                  <p class="card-text">No Pembelian                 : {{$adorders->trx_id}}</p>
                  <p class="card-text">Status Produk                : {{$adorders->p_status}}</p>
                  <a href="{{ $adorders->id }}/edit">Edit</a>
                  <form action="/adorders/{{ $adorders->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                  </form>
                  <a href="/adorders">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
