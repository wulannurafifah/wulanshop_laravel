@extends('layout/login')

@section('title', 'Show Histori Pembelian')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Daftar Histori Pembelian</h3>
            <a href="/adlogshops/create" class="btn btn-primary my-3">Tambah Data Histori Pembelian</a>
            <ul class="list-group">
                @foreach ($adlogshops as $adnlogshop)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $adnlogshop -> user_id}}
                  <a href="/adlogshops/{{ $adnlogshop -> id }}" class="badge badge-info"> Detail </a>
                </li>
                @endforeach
              </ul>
        </div>
    </div>
</div>
@endsection

