@extends('layout/login')

@section('title', 'Brands')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Detail Brands</h3>
            
            <div class="card">
                <div class="card-body">
                  <p class="card-text">Nama Brand       : {{$adbrands->brand_title}}</p>
                  <a href="{{ $adbrands->id }}/edit">Edit</a>
                  <form action="/adbrands/{{ $adbrands->id }}" method="post" class="d-inline">
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
