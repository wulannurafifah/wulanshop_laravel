@extends('layout/login')

@section('title', 'Show Brands')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Daftar Brands</h3>
            <a href="/adbrands/create" class="btn btn-primary my-3">Tambah Brands</a>
            <ul class="list-group">
                @foreach ($adbrands as $adnbrand)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $adnbrand -> brand_title}}
                  <a href="/adbrands/{{ $adnbrand -> id }}" class="badge badge-info"> Detail </a>
                </li>
                @endforeach
              </ul>
        </div>
    </div>
</div>
@endsection

