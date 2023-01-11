@extends('layout/login')

@section('title', 'Show Order Info')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Daftar Order Info</h3>
            <a href="/adorderinfos/create" class="btn btn-primary my-3">Tambah Data Order Info</a>
            <ul class="list-group">
                @foreach ($adorderinfos as $adnorderinfos)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $adnorderinfos -> id_user}}
                  <a href="/adorderinfos/{{ $adnorderinfos -> id }}" class="badge badge-info"> Detail </a>
                </li>
                @endforeach
              </ul>
        </div>
    </div>
</div>
@endsection

