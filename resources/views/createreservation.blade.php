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
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
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
          <li><a href="{{route('showallpaidservice')}}">FACILITY</a></li>
          <li><a href="#">GALLERY</a></li>
          <li><a href="#">CONTACT</a></li>
          <li><a href="#">F.A.Q</a></li>
          <li><a href="#about">ABOUT US</a></li>
          <li>
          <div class="dropdown">
              <button class="dropbtn">DATA
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
               
              </div>
          </div>
          </li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row3">
  <div id="pageintro" class="hoc clear">
    <article>
      <!-- ################################################################################################ -->
      <h3 class="heading">RESERVATION</h3>
      <p>Please Input Your Reservation</p>
      <br><br>

            <div class="col-sm-5 col-md-6">

            <form class="" action="{{ route('reservasi.store') }}" method="post">
                {{ csrf_field() }}

                <!-- <div class="form-group">
                    <label for="idUser">Nama User</label>
                    <input type="hidden" class="form-control" name="idUser"  placeholder = "Nama Lengkap" required >
                </div> -->

                <div class="form-group">
                    <label for="IdUser"> Choose User</label><br>
                    <select name="IdUser" id="" placeholder = " Select User" class="form-control">
                    @foreach($user as $value)
                        <option value="{{$value->id}}">{{$value->FirstName}}</option>
                    @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="IdBranch"> Choose Branch</label><br>
                    <select name="IdBranch" id="" placeholder = " Choose Branch" class="form-control">
                    @foreach($branch as $value)
                        <option value="{{$value->id}}">{{$value->Name}}</option>
                    @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="IdRoomType"> Room Type</label><br>
                    <select name="IdRoomType" id="" placeholder = " Room Type" class="form-control">
                    @foreach($roomtype as $value)
                        <option value="{{$value->id}}">{{$value->RoomName}}</option>
                    @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="RoomQuantity">Room Quantity</label>
                    <input type="number" class="form-control" name="RoomQuantity" placeholder = "Room Quantity" required>
                </div>

                <div class="form-group">
                    <label for="Date">Date Reservation</label>
                    <input type="date" class="form-control" name="Date" placeholder = "Date Reservation" required >
                </div>


              <div class="form-group">
                <div class="row">
                <div class="col-xs-6">
                  <label for="CheckInDate">Check In Date</label>
                  <input type="date" class="form-control" name="CheckInDate" placeholder = "Check In Date" required >
                </div>
                <div class="col-xs-6">
                  <label for="CheckOutDate">Check Out Date</label>
                  <input type="date" class="form-control" name="CheckOutDate" placeholder = "Check Out Date" required >
                </div></div>
              </div>



            <div class="form-group">
                <div class="row">
                <div class="col-xs-6">
                  <label for="AdultQuantity">Adult Quantity</label>
                <select class="form-control" name="AdultQuantity" placeholder = "JAdult Quantity" required>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
                </div>
                <div class="col-xs-6">
                  <label for="KidsQuantity">Kids Quantity</label>
                <select class="form-control" name="KidsQuantity" placeholder = "Kids Quantity" required >
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
                </div></div>
            </div>


                <div class="form-group">
                    <label for="UserStatus">Status Reservation</label>
                    <select name="UserStatus" id="" class="form-control">
                        <option value="Reservasi">Reservasi</option>
                        <option value="Cancel">Cancel</option>
                        <option value="Check In">Check In</option>
                        <option value="Check Out">Check Out</option>
                    </select>
                </div>


                <div class="form-group">
                    <input type="hidden" class="form-control" name="IdBooking" placeholder = "" required>
                </div>

                <div class="form-group">
                    <label for="IdPaidService"> Choose Paid Services</label><br>
                    <select name="IdPaidService" id="" placeholder = " Choose Paid Services" class="form-control">
                    @foreach($paidservice as $value)
                        <option value="{{$value->id}}">{{$value->PaidServiceName}}</option>
                    @endforeach
                    </select>
                </div>

                <div class="form-group pull-right">
                    <input type="submit" name="add" value="Simpan" class="btn btn-success">
                </div>
            </div>
            </form>
      <!-- ################################################################################################ -->
    </article>
  </div>
  <!-- ################################################################################################ -->
</div>
</div>

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
