<!DOCTYPE html>
<!--
Template Name: Hoppler
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>GRAND ATMA HOTELS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">Grand Atma Hotels</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="{{route('reservasi.store')}}">RESERVATION</a></li>
          <li><a href="{{route('showallpaidservice')}}">FACILITY</a></li>
          <li><a href="{{route('gallery')}}">GALLERY</a></li>
          <li><a href="{{route('contacthotel')}}">CONTACT</a></li>
          <li><a href="#">F.A.Q</a></li>
          <li><a href="#about">ABOUT US</a></li>
          <li>
          <div class="dropdown">
              <button class="dropbtn">DATA
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="{{route('showallseason')}}">SEASON</a>
                <a href="{{route('showallrole')}}">ROLE</a>
                <a href="{{route('usersearch')}}">USER</a>
                <a href="{{route('showall')}}">PRICE</a>
                <a href="{{route('showallprice')}}">ALL PRICE</a>
                <a href="{{route('showallroomtype')}}">ROOM TYPE</a>
              </div>
          </div>
          </li>






        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
</div>
    <form class="" method="POST" action="{{ route('postdataTamu') }}">
      {{ csrf_field() }}
      <h1 class="h3 mb-3 font-weight-normal">Please Input Your Data</h1>
      <label for="inputFirstName" class="sr-only">First Name</label>
      <input type="text" name="FirstName" id="inputFirstName" class="form-control {{ $errors->has('FirstName')? 'is-invalid' : '' }}" placeholder="First Name" value="{{ old('FirstName') }}" required autofocus>
      <?php if ($errors->has('FirstName')): ?>
          <div class="">
              {{ $errors->first('FirstName') }}
          </div>
      <?php endif; ?>

      <label for="inputLastName" class="sr-only">Last Name</label>
      <input type="text" name="LastName" value="{{ old('LastName') }}" id="inputLastName" class="form-control {{ $errors->has('LastName')? 'is-invalid' : '' }}" placeholder="Last Name" required >
      <?php if ($errors->has('LastName')): ?>
          <div class="">
              {{ $errors->first('LastName') }}
          </div>
      <?php endif; ?>

      <label for="inputIdentityNumber" class="sr-only">Identity Number</label>
      <input type="text" name="IdentityNumber" value="{{ old('IdentityNumber') }}" id="inputIdentityNumber" class="form-control {{ $errors->has('IdentityNumber')? 'is-invalid' : '' }}" placeholder="Identity Number" required >
      <?php if ($errors->has('IdentityNumber')): ?>
          <div class="">
              {{ $errors->first('IdentityNumber') }}
          </div>
      <?php endif; ?>

      <label for="inputPhoneNumber" class="sr-only">Phone Number</label>
      <input type="text" name="PhoneNumber" value="{{ old('PhoneNumber') }}" id="inputPhoneNumber" class="form-control {{ $errors->has('PhoneNumber')? 'is-invalid' : '' }}" placeholder="Phone Number" required >
      <?php if ($errors->has('PhoneNumber')): ?>
          <div class="">
              {{ $errors->first('PhoneNumber') }}
          </div>
      <?php endif; ?>

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="EmailAddress" value="{{ old('EmailAddress') }}" id="inputEmail" class="form-control {{ $errors->has('EmailAddress')? 'is-invalid' : '' }}" placeholder="Email address" required >
      <?php if ($errors->has('EmailAddress')): ?>
          <div class="">
              {{ $errors->first('EmailAddress') }}
          </div>
      <?php endif; ?>

      <label for="inputAddress" class="sr-only">Address</label>
      <input type="text" name="Address" value="{{ old('Address') }}" id="inputAddress" class="form-control {{ $errors->has('Address')? 'is-invalid' : '' }}" placeholder="Address" required >
      <?php if ($errors->has('Address')): ?>
          <div class="">
              {{ $errors->first('Address') }}
          </div>
      <?php endif; ?>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="Password" id="inputPassword" class="form-control {{ $errors->has('Password')? 'is-invalid' : '' }}" placeholder="Password" required>
      <?php if ($errors->has('Password')): ?>
          <div class="">
              {{ $errors->first('Password') }}
          </div>
      <?php endif; ?>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
  <div class="hoc container clear">
    <!-- ################################################################################################ -->
    <div class="sectiontitle" id=#about>
      <h6 class="heading">ABOUT US</h6>
    </div>
    <div class="group">

        <p id ="about">
        Grand Atma Hotels merupakan hotel bintang 3 yang terdapat di Kota Yogyakarta dan Bandung. Di kota Yogyakarta, Grand Atma Hotels
        terletak di jantung Jalan Malioboro yang ramai dan dekat dengan ikon Tugu. Menyediakan akses mudah ke pasar tradisional Beringharjo,
        jalan Malioboro, dan stasiun Kereta Api Tugu. Di kota Bandung, terletak di pusat kota, dan menawarkan akses mudah ke beberapa tempat
        wisata seperti pusat perbelanjaan dan tempat hiburan utama. Para tamu dapat mencapai bandara dan stasiun kereta api dalam waktu 10 menit.<br>

        Grand Atma Hotels memiliki 125 kamar yang didesain dengan cantik. Kamar dilengkapi televisi LCD dengan tv kabel, akses internet Wifi gratis, AC,
        telepon, rak pakaian, kopi instan gratis, teh gratis. Hotel ini dilengkapi restoran, kolam renang, pijat/spa,dan bar/lounge. Fasilitas lain mencakup
        minibar dan laundry. Grand Atma Hotel adalah tempat penginapan ideal bagi para turis dan bisnis yang mencari daya tarik, kenyamanan, dan kepraktisan.
        </p>



    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->


<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
     <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">P3L_A_5</a></p>
     </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
