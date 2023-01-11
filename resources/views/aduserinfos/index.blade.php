@extends('layout/login')

@section('title', 'Show User Info')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Daftar User Info</h3>
            <a href="/aduserinfos/create" class="btn btn-primary my-3">Tambah User Info</a>
            <ul class="list-group">
                @foreach ($aduserinfos as $adnuserinfo)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $adnuserinfo -> email}}
                  <a href="/aduserinfos/{{ $adnuserinfo -> id }}" class="badge badge-info"> Detail </a>
                </li>
                @endforeach
              </ul>
        </div>
    </div>
</div>
@endsection

