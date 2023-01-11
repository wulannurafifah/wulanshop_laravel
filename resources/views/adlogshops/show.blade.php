@extends('layout/login')

@section('title', 'Histori Pembelian')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Detail Histori Pembelian</h3>
            
            <div class="card">
                <div class="card-body">
                  <p class="card-text">User ID          : {{$adlogshops->user_id}}</p>
                  <p class="card-text">Barang Yang Dibeli        : {{$adlogshops->action}}</p>
                  <p class="card-text">Tanggal Pembelian            : {{$adlogshops->date}}</p>
                  <a href="{{ $adlogshops->id }}/edit">Edit</a>
                  <form action="/adlogshops/{{ $adlogshops->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                  </form>
                  <a href="/adlogshops">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
