@extends('layout/home')

@section('title', 'Wulan Shop')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-20">            
            <h2 class = "mt-3">Selamat Datang Di Wulan Shop</h2>
              <img class="d-block w-200" src="{{('images/wulan.png')}}" alt="First slide">
        </div>
    </div>
    <a href="menu" type="submit" class="btn btn-info">Kunjungi</a>
</div>

@endsection
