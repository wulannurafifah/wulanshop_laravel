@extends('layout/login')

@section('title', 'Show Order')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Daftar Order</h3>
            <a href="/adorders/create" class="btn btn-primary my-3">Tambah Data Order</a>
            <ul class="list-group">
                @foreach ($adorders as $adnorder)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $adnorder -> user_id}}
                  <a href="/adorders/{{ $adnorder -> id }}" class="badge badge-info"> Detail </a>
                </li>
                @endforeach
              </ul>
        </div>
    </div>
</div>
@endsection

