@extends('layouts.header')

  <div id ="element1">
    <h1> GRAND ATMA HOTELS </h1>
  </div>

  <div id ="element2">
    <section class="content-header" display:inline-block>
      <button class="tablink" onclick="openCity('Reservasi', this, 'red')" id="defaultOpen" style="float: right;">Reservasi</button>
      <button class="tablink" onclick="openCity('Input Data', this, 'green') "style="float: right;">Input Data</button>
      <button class="tablink" onclick="openCity('Transaksi', this, 'blue')"style="float: right;">Transaksi</button>
      <button class="tablink" onclick="openCity('Generate', this, 'orange')"style="float: right;">Generate</button>
    </section>
  </div>

  <div id="image">
     <a href="#"><img src="../images/nota.jpg" alt="Superior Room" margin-left: "-50px"></a>
  </div>

  