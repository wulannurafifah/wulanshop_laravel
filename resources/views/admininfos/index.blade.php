@extends('layout/login')

@section('title', 'Show Admin Info')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Daftar Admin Info</h3>
            <a href="/admininfos/create" class="btn btn-primary my-3">Tambah Data Admin Info</a>
            <ul class="list-group">
                @foreach ($admininfos as $adminninfos)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $adminninfos -> admin_name}}
                  <a href="/admininfos/{{ $adminninfos -> id }}" class="badge badge-info"> Detail </a>
                </li>
                @endforeach
              </ul>
        </div>
    </div>
</div>
@endsection

