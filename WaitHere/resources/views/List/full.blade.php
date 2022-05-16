<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/full.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Restaurant List</title>
  </head>
  <style>
      body {
          background-color : #FAF2DA;
          font-family:roboto;
      }
      pink .container .button {
          width : 272px;
          height : 69px;

      }
    </style>
  <body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <div class="navbar" style="background-color: #4A503D; height: 60px">
        @include('include.navbar') 
        
        @foreach ($restos as $resto)
            
        <div class=container>
            <div class="row" style="text-align:left;">
            <div class="col-sm-3">
                <img src="{{$resto->foto}}" style="text-align:left; width:250px; height:250px;margin-top:30px;margin-left:225px;box-shadow: 5px 4px 3px #8E9775;border-radius:10px;">
            </div>
            <div class="col-sm-6">
                <div style="width: 500px; height: 45px; background-color:#e28f83;color:#4a503d; text-align: center; padding-top: 7px; margin-left: 230px; margin-top: 30px;margin-bottom: 15px; box-shadow: 7px 8px 4px #4a503d;border-radius:10px; font-size:20px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;">
                    {{$resto->nama_restoran}}
                </div> <br>
                <a style="color:#4a503d; margin-left: 305px; font-size: 18px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;"> Senin - Minggu</a>
                <a style="color:#4a503d; margin-left: 305px; font-size: 18px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;"> 10.00 - 21.00</a>
                
                <div class="col-sm-4" style="width: 130px; height: 40px; background-color: #8e9775; text-align: center; margin-left: 603px; margin-top: 55px; box-shadow: 6px 7px 4px #4a503d;border-radius:10px; font-size:20px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;">
                    <a href="{{url('resto/'.$resto->restoran_id)}}"><button type="button" class="btn" style="color: #FAF2DA; font-size: 18px;">More Details</button></a>
                </div>
            </div>
                </div>
        </div>
        </div><br><br>
        @endforeach()
 
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