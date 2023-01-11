@extends('layout/login')

@section('title', 'User Info')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Detail User Info</h3>
            
            <div class="card">
                <div class="card-body">
                  <p class="card-text">Nama Awal  : {{$aduserinfos->first_name}}</p>
                  <p class="card-text">Nama Akhir : {{$aduserinfos->last_name}}</p>
                  <p class="card-text">Email      : {{$aduserinfos->email}}</p>
                  <p class="card-text">Password   : {{$aduserinfos->password}}</p>
                  <p class="card-text">No HP     : {{$aduserinfos->mobile}}</p>
                  <p class="card-text">Alamat Lengkap   : {{$aduserinfos->address1}}</p>
                  <p class="card-text">Kode Pos   : {{$aduserinfos->address2}}</p>
                  <a href="{{ $aduserinfos->id }}/edit">Edit</a>
                  <form action="/aduserinfos/{{ $aduserinfos->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                  </form>
                  <a href="/aduserinfos">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
