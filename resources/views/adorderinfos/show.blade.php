@extends('layout/login')

@section('title', 'Order Info')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Detail Order Info</h3>
            
            <div class="card">
                <div class="card-body">
                  <p class="card-text">User ID          : {{$adorderinfos->id_user}}</p>
                  <p class="card-text">Nama Awal        : {{$adorderinfos->first_name}}</p>
                  <p class="card-text">Email            : {{$adorderinfos->email}}</p>
                  <p class="card-text">Alamat Lengkap   : {{$adorderinfos->address}}</p>
                  <p class="card-text">Jumlah Produk    : {{$adorderinfos->jumlah_produk}}</p>
                  <p class="card-text">Total Harga      : {{$adorderinfos->total_harga}}</p>
                  <a href="{{ $adorderinfos->id }}/edit">Edit</a>
                  <form action="/adorderinfos/{{ $adorderinfos->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                  </form>
                  <a href="/adorderinfos">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
