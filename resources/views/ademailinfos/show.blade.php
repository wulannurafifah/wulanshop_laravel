@extends('layout/login')

@section('title', 'Email Info')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Detail Email Info</h3>
            
            <div class="card">
                <div class="card-body">
                  <p class="card-text">Nama Email       : {{$ademailinfos->email}}</p>
                  <a href="{{ $ademailinfos->id }}/edit">Edit</a>
                  <form action="/ademailinfos/{{ $ademailinfos->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                  </form>
                  <a href="/ademailinfos">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
