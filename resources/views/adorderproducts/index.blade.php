@extends('layout/login')

@section('title', 'Show Order Products')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Daftar Order Produk</h3>
            <a href="/adorderproducts/create" class="btn btn-primary my-3">Tambah Data Order Produk</a>
            <ul class="list-group">
                @foreach ($adorderproducts as $adnorderproducts)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $adnorderproducts -> order_pro_id}}
                  <a href="/adorderproducts/{{ $adnorderproducts -> id }}" class="badge badge-info"> Detail </a>
                </li>
                @endforeach
              </ul>
        </div>
    </div>
</div>
@endsection

