@extends('layout/login')

@section('title', 'Show Kategori')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Daftar Kategori</h3>
            <a href="/adcategories/create" class="btn btn-primary my-3">Tambah Kategori</a>
            <ul class="list-group">
                @foreach ($adcategories as $adncategorie)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $adncategorie -> cat_title}}
                  <a href="/adcategories/{{ $adncategorie -> id }}" class="badge badge-info"> Detail </a>
                </li>
                @endforeach
              </ul>
        </div>
    </div>
</div>
@endsection

