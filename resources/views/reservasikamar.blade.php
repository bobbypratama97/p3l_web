
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reservasi Kamar</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <a href="#"><img src="../images/superior.jpg" alt="Superior Room" margin-left: "-50px"></a>
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-10">
            <div class="panel panel-default">
                <div class="panel-heading">VIEW JENIS KAMAR BESERTA DETAIL NYA</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                                        <thead>
                                        <th>Room Facility</th>
                                        <th>Price Nominal</th>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $d)
                                        <tr>
                                        <td><a href="{{ route('reservasikamar',$d->IdRoomType) }}"></a></td>
                                            <td>{{ $d->RoomFacility }}</td>
                                            <td>{{ $d->PriceNominal}}</td>        
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
