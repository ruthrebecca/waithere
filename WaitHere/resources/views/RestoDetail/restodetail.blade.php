<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/restodetail.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Union</title> <!-- Nama Restoran -->
  </head>
  <!-- Jangan diubah2 -->
  <!-- Warna Background & Style Font -->
  <style>
      body {
          background-color : #FAF2DA;
          font-family:roboto;
          min-height: 100%;
      }
      pink .container .button {
          width : 7px;
          height : 69px;

      }
  </style>
  <body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <div class="navbar" style="background-color: #4A503D; height: 60px">
        @include('include.navbar') 
      </div>
      <div class="image" >
        <img src="{{$resto->foto}}" style="width: 1440px; height: 540px;px;">
      </div>
      <div class="pink" style="background-color:#E28F83; height: 110px;box-shadow: 5px 4px 3px #8E9775;">
        <br>
        <div class="container"><br>
            <div class="row" style="text-align:center;">
                <span class="col-sm-3" >
                    <div style="text-shadow: 4px 4px 4px black;width: 1000px; height:282px;border-radius:40px;margin-top:-45px;margin-left:150px;font-family:roboto;font-weight: bolder;font-size: 70px;color: #4A503D;">{{$resto->nama_restoran}}
                </div>
            </div>
        </div>
        <br>
        </div>
        <center></center>
        {{-- <img src="{{$resto->foto}}" style="width:1200px; height:1200px;margin-top:-250px;margin-left:150px;position:absolute;opacity:0.3;"> --}}
        
        </center>
        <br>
            <br>
            <div class="container"><br>
                <div class="row" style="text-align:center;">
                    <span class="col-sm-3" >
                        <div style="text-shadow: 2px 0px 5px #8E9775;width: 1000px; height:282px;border-radius:40px;margin-left:175px;margin-top:20px;font-family:roboto;font-weight: bolder;font-size: 25px;color: #4A503D;">A tribute to classic early 20th century American brasserie,<br>bakery & bar serving quality food, beverages and baked goods.
                    </div>
                </div>
            <br>
            </div>
            <br><div class="container"><br>
                <div class="row" style="text-align:left;">
                    <i class="far fa-clock"style="width: 90px;height: 90px;margin-top:-135px;margin-left:100px;color: #4A503D;"></i>
                    <span class="col-sm-3" >
                        <div style="text-shadow: 2px 0px 3px #8E9775;width: 1000px; height:282px;border-radius:40px;margin-top:-120px;margin-left:10px;font-family:roboto;font-weight: bolder;font-size: 20px;color: #4A503D;">Monday - Thursday : 10.00 - 21.00<br>Friday - Sunday : 09.00 - 23.00
                    </div>
                </div>
            <br>
            </div>
            <br>
            <br><div class="container"><br>
                <div class="row" style="text-align:right;">
                    <i class="fas fa-map-marker-alt"style="width: 75px;height: 75px;margin-top:-210px;margin-left:1155px;color: #4A503D;"></i>
                    <span class="col-sm-3" >
                        <div style="text-shadow: 2px 0px 3px #8E9775;width: 1000px; height:282px;border-radius:40px;margin-top:-215px;margin-left:110px;font-family:roboto;font-weight: bolder;font-size: 20px;color: #4A503D;">{{$resto->alamat_restoran}}
                    </div>
                </div>
            <br>
            </div>
            <br>
            </div>
            <br>
            <center>
            <br><br><br> 
        <h1 style="text-shadow: 5px 4px 3px #8E9775;margin-top:-200px;margin-bottom:10px;margin-left:0px;font-family:roboto;font-weight: bolder;font-size: 50px;color: #4A503D;">M E N U</h1>
        <div class="container"><br>
            <div class="row" style="text-align:center;margin-bottom: 70px;">
                <div class="col-sm-12" >
                    <img src="{{$resto->menu}}" style="box-shadow: 5px 4px 3px #8E9775;width:328px; height:500px;border-radius:10px;">
                </div>
                {{-- <div class="col-sm-4">
                    <img src="{{asset('images/menu2.png')}}" style="box-shadow: 5px 4px 3px #8E9775;width:328px; height:500px;border-radius:10px;">
                </div>
                <div class="col-sm-4">
                    <img src="{{asset('images/menu3.png')}}" style="box-shadow: 5px 4px 3px #8E9775;width:328px; height:500px;border-radius:10px;">
                </div> --}}
                <div class="col-sm-4">
                    <a href="{{url('resto/'.$resto->restoran_id.'/reservasi')}}"><button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#FAF2DA; background-color:#E28F83;width: 350px; height:60px;border-radius:10px;margin-top:50px;margin-bottom:30px;margin-left:475px;font-family:roboto;font-weight: bolder;font-size: 30px;">Reserve A Seat</button></a>
                </div>
            </div>
        </center>
        <div class="footer" style="background-color:#4A503D; height:250px;color: #FAF2DA; margin-top:10px; padding-top: 5px;">
            <br>
            <div class="container">
                <div class="row" style="text-align:left;">
                    <div class="col-sm-4" style="padding:10px;" >
                        <h2 style="font-size: 25px; text-shadow:4px 3px 2px #8E9775; margin-bottom: 15px;">CREDIT BY </h2>
                        <a style="font-size: 19px;">Nadine Annisa Heartman</a><br>
                        <a style="font-size: 19px;">Milyanda Vania</a><br>
                        <a style="font-size: 19px;">Diandha Carnatia Rizsyifaa</a><br>
                        <a style="font-size: 19px;">Ruth Rebecca Ovelin</a><br>
                        <a style="font-size: 19px;">Yuela Thahira</a><br>
                    </div>
                    <div class="col-sm-4" style="padding:10px;">
                        <h2 style="font-size: 25px; text-shadow:4px 3px 2px #8E9775; margin-bottom: 15px;">CUSTOMER CARE </h2>
                        <a style="font-size: 19px;">Email</a><br>
                        <i class="fas fa-envelope"></i><a> waithere@gmail.com</a><br><br>
                        <a style="font-size: 19px;">Phone Number</a><br>
                        <i class="fas fa-phone"></i> <a>    0857171162617</a><br>
                    </div>
                    <img src="{{asset('images/logo.png')}}" style=" width:270px;height:270px;margin-top:-230px;margin-left:1070px;">
                </div>
            </div>
        </div>
        <div class="footer2" style="background-color:#8E9775; height:30px;"></div>
    </div>           
  </body>
  </html>
