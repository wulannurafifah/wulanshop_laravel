@extends('layout/home')

@section('title', 'Tentang Kami')

@section('container')

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-wide w3-padding w3-card" style="background-color:#17a2b8;">
    <a href="/menu" class="w3-button"><b>Wulan Shop</b></a>
    <div class="w3-right w3-hide-small">
      <a href="/" class="w3-button">Home</a>
    </div>
  </div>
</div>
<br><br><br>

<div class="container">
    <div class="row">
        <div class="col-8">            
            <b><h3 class = "mt-3">Tentang Kami</h3>
            <p>Wulan Shop merupakan web penjualan berbagai barang seperti pakaian wanita, pakaian pria, dan barang elektronik.</p>        
            <br>
            <p>Dibuat Oleh <br> Wulan Nur Afifah (20.01.53.0001)<br></p><br><br><br>
        </div>
    </div>
</div>
@endsection
