<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/reservasii.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <title>My Reservation</title>
    </head>
    <style>
        body {
            background-color: #FAF2DA;
            font-family:roboto;
        }
    </style>
    <body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
        <div class="navbar" style="background-color: #4A503D; height: 60px">
            @include('include.navbar') 
            <div class="image" style="background-color: #E28F83; height: 880px;">
            <img src="images/waithere!.png" style="width: 1440px; height:1100px;">
          </div>
          <div class="pink" style="background-color:#E28F83; margin-top: 220px;height: 110px;box-shadow: 5px 4px 3px #8E9775;">
            <br>
            <div class="container"><br>
                <div class="row" style="text-align:center;">
                    <span class="col-sm-3" >
                        <div style="text-shadow: 4px 4px 4px black;width: 1000px; height:282px;border-radius:40px;margin-top:-23px;margin-left:150px;font-family:roboto;font-weight: bolder;font-size: 40px;color: #4A503D;">R E S E R V A S I K U
                    </div>
                </div>
            </div>
            <br>
            </div>
        <center>
            <img src="images/logo.png" style="width:1200px; height:1200px;margin-top:-250px;margin-left:-550px;position:absolute;opacity:0.3;">
        <div class="box" align="center"style="position:relative;">
            <div class="content" align="left" >
                <form action="/reservasi/update" method="post"><br><br><br>
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <a style="font-size:20px; font-weight:bold; ">Name :</a>
                        </div>
                        <div class="col-sm-6">
                            <input value="{{session('user.nama_user')}}" disabled><br><br>
                        </div>    
                    </div> 
                    <div class="row">
                        <div class="col-sm-6">
                            <a style="font-size:20px; font-weight:bold; ">Restaurant :</a>
                        </div>
                        <div class="col-sm-6">
                            <input value="{{$resto}}" disabled><br><br>
                        </div>    
                    </div> 
                    <div class="row">
                        <div class="col-sm-6">
                            <a style="font-size:20px; font-weight:bold; ">Date :</a>
                        </div>
                        <div class="col-sm-6">
                            <input type="date" name="hari_reservasi" value="{{$reservasi->hari_reservasi}}"><br><br>
                        </div>    
                    </div> 
                    <div class="row">
                        <div class="col-sm-6">
                            <a style="font-size:20px; font-weight:bold; ">Reservation Time :</a>
                        </div>
                        <div class="col-sm-6 dropdown">
                            <input type="text" name="jam_reservasi" value="{{$reservasi->jam_reservasi}}"><br><br>
                            
                        </div>    
                    </div> 
                    <div class="row">
                        <div class="col-sm-6">
                            <a style="font-size:20px; font-weight:bold; ">Guest :</a>
                        </div>
                        <div class="col-sm-6">
                            <input type="number" name="jumlah" value="{{$reservasi->jumlah}}"><br><br>
                        </div>    
                    </div> 
                    <div class="row">
                        <div class="col-sm-6">
                            <a style="font-size:20px; font-weight:bold; ">Special Request :</a>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="srequest" value="{{$reservasi->request}}"><br><br>
                        </div>    
                    </div> 
                    <div class="row">
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                            <a href="{{url('reservasi/cancel')}}">
                            <input style="border: none;
                    color: rgba(250.00000029802322, 242.00000077486038, 218.00000220537186, 1);
                    font-size: 15px;
                    font-family: Roboto;
                    font-size:18px;
                    margin-left: 45px;
                    width: 150px;
                    border-radius: 10px;
                    margin-top: 30px;
                    background-color: #E28F83;" type="button" value="Cancel"></input></a>
                        </div>
                        <div class="col-sm-4">
                            <input style="border: none;
                    color: rgb(250, 242, 218);
                    font-size: 15px;
                    font-family: Roboto;
                    font-size:18px;
                    margin-left: 7px;
                    width: 150px;
                    border-radius: 10px;
                    margin-top: 30px;
                    background-color: #8E9775;" type="submit" value="Update"></input>
                        </div>    
                    </div> 
                </form>
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
                <img src="images/logo.png" style=" width:270px;height:270px;margin-top:-230px;margin-left:1070px;">
            </div>
        </div>
    </div>
    <div class="footer2" style="background-color:#8E9775; height:30px;"></div>
</div>

    </body>
</html>