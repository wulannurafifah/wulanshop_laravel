@extends('layout/login')

@section('title', 'Admin Info')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Detail Admin Info</h3>
            
            <div class="card">
                <div class="card-body">
                  <p class="card-text">Nama Admin          : {{$admininfos->admin_name}}</p>
                  <p class="card-text">Email Admin        : {{$admininfos->admin_email}}</p>
                  <p class="card-text">Password            : {{$admininfos->admin_password}}</p>
                  <a href="{{ $admininfos->id }}/edit">Edit</a>
                  <form action="/admininfos/{{ $admininfos->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                  </form>
                  <a href="/admininfos">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
