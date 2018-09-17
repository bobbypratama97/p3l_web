@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contact Hotel</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Grand Atma Hotels - Bandung</h2>
                    Address   : Jl. Peta 241, Pasir Koja, Suka Asih, Bojongloa, Kales, Bandung City, West Java 40231
                    <br>
                    Phone     : (022)6128655

                    <br>
                    <br>

                    <h2>Grand Atma Hotels - Yogyakarta</h2>
                    Address   : Jl. Pasar Kembang No 21, Malioboro, Yogyakarta City, Special Region of Yogyakarta 55271
                    <br>
                    Phone     : (0274)511999
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
