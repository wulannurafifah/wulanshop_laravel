@extends('layout/login')

@section('title', 'Dashboard')

@section('container')
<br><br><br>
<div class="row text-center">
    <div class="col-sm-5"><center>
      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Daftar Produk</h5>
          <a href="{{ url('/adproducts')}}" class="btn btn-primary">Show</a>
        </div>
      </div>
    </div></center>
    <div class="col-sm-5"><center>
      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Daftar Brands</h5>
          <a href="{{ url('/adbrands')}}" class="btn btn-primary">Show</a>
        </div>
      </div>
    </div></center>
  </div>

  <div class="row text-center">
    <div class="col-sm-5"><center>
      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Daftar Kategori</h5>
          <a href="{{ url('/adcategories')}}" class="btn btn-primary">Show</a>
        </div>
      </div>
    </div></center>
    <div class="col-sm-5"><center>
      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Daftar Email Info</h5>
          <a href="{{ url('/ademailinfos')}}" class="btn btn-primary">Show</a>
        </div>
      </div>
    </div></center>
  </div>

  <div class="row text-center">
    <div class="col-sm-5"><center>
      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Daftar User Info</h5>
          <a href="{{ url('/aduserinfos')}}" class="btn btn-primary">Show</a>
        </div>
      </div>
    </div></center>
    <div class="col-sm-5"><center>
      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Daftar Order Produk</h5>
          <a href="{{ url('/adorderproducts')}}" class="btn btn-primary">Show</a>
        </div>
      </div>
    </div></center>
    <div class="col-sm-5"><center>
      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Daftar Order Info</h5>
          <a href="{{ url('/adorderinfos')}}" class="btn btn-primary">Show</a>
        </div>
      </div>
    </div></center>
    <div class="col-sm-5"><center>
      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Daftar Admin Info</h5>
          <a href="{{ url('/admininfos')}}" class="btn btn-primary">Show</a>
        </div>
      </div>
    </div></center>
  </div>

  <div class="row text-center">
    <div class="col-sm-5"><center>
      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Daftar Histori Pembelian</h5>
          <a href="{{ url('/adlogshops')}}" class="btn btn-primary">Show</a>
        </div>
      </div>
    </div></center>
    <div class="col-sm-5"><center>
      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Daftar Order</h5>
          <a href="{{ url('/adorders')}}" class="btn btn-primary">Show</a>
        </div>
      </div>
    </div></center>
  </div>
@endsection