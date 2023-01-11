<!DOCTYPE html>
<html>
<head>
<title>Wulan Shop</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-wide w3-padding w3-card" style="background-color:#17a2b8;">
    <a href="#home" class="w3-bar-item w3-button"><b>Wulan Shop</b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="/login" class="w3-bar-item w3-button">Admin</a>
    </div>
    <div class="w3-right w3-hide-small">
      <a href="/about" class="w3-bar-item w3-button">Tentang Kami</a>
    </div>
    <div class="w3-right w3-hide-small">
      <a href="https://wa.me/6285325215924" class="w3-bar-item w3-button">Hubungi Kami</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1000px;" id="home">
  <br><img class="w3-image" src="images/wulan.png" alt="Architecture" width="1000" height="500">
  <div class="w3-display-middle w3-margin-top w3-center">
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Produk</h3>
  </div>

  @foreach ($adproducts as $adnproducts)
  <!-- Baris 1 -->
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="images/gambar.png" style="width:84%">
          <div class="w3-display-middle w3-display-hover">
            <a href="/product1/{{$adnproducts -> id}}" class="w3-button w3-black">Beli <i class="fa fa-shopping-cart"></i></a>
          </div>
        </div>
        <p>{{$adnproducts -> product_title}}<br><b>{{$adnproducts -> product_price}}</b></p>
      </div>
    </div>
    @endforeach

    </div>
  </div>
</body>
</html>
