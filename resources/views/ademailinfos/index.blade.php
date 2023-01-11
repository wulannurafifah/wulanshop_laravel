@extends('layout/login')

@section('title', 'Show Email Info')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Daftar Email Info</h3>
            <a href="/ademailinfos/create" class="btn btn-primary my-3">Tambah Email Info</a>
            <ul class="list-group">
                @foreach ($ademailinfos as $adnemailinfo)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $adnemailinfo -> email}}
                  <a href="/ademailinfos/{{ $adnemailinfo -> id }}" class="badge badge-info"> Detail </a>
                </li>
                @endforeach
              </ul>
        </div>
    </div>
</div>
@endsection

