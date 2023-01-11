@extends('layout/login')

@section('title', 'Kategori')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Detail Kategori</h3>
            
            <div class="card">
                <div class="card-body">
                  <p class="card-text">Nama Kategori       : {{$adcategories->cat_title}}</p>
                  <a href="{{ $adcategories->id }}/edit">Edit</a>
                  <form action="/adcategories/{{ $adcategories->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                  </form>
                  <a href="/adbrands">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
