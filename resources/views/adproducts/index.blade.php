@extends('layout/login')

@section('title', 'Show Products')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Daftar Produk</h3>
            <a href="/adproducts/create" class="btn btn-primary my-3">Tambah Data Produk</a>
            <ul class="list-group">
                @foreach ($adproducts as $adnproducts)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $adnproducts -> product_cat}}
                  <a href="/adproducts/{{ $adnproducts -> id }}" class="badge badge-info"> Detail </a>
                </li>
                @endforeach
              </ul>
        </div>
    </div>
</div>
@endsection

