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
        <title>Reserve A Table</title>
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
            <img src="{{asset('images/waithere!.png')}}" style="width: 1440px; height:1100px;">
          </div>
          <div class="pink" style="background-color:#E28F83; height: 110px;box-shadow: 5px 4px 3px #8E9775; margin-top: 220px;"></div>
        </div>
        <center>
            <img src="{{asset('images/logo.png')}}" style="width:1200px; height:1200px;margin-top:-250px;margin-left:-550px;position:absolute;opacity:0.3;">
            <h1><u>RESERVATION</u></h1>
        <div class="box" align="center"style="position:relative;">
            <div class="content" align="left" style="padding-left:50px;">
                <form method="POST" action="{{url('reservasi/store')}}"><br><br><br>
                    @csrf
                    <div class="dropdown">
                    <label for="nama" style="font-size:20px; font-weight:bold;">Restaurant Name: </label><br>
                    <select name="restoran_id" >
                        <optgroup label="Brunch">
                          <option value="10010">Union</option>
                          <option value="10011">Pippo</option>
                          <option value="10014">SEL Gunawarman</option>
                        <optgroup label="Bar & Lounge">
                          <option value="10007">The Awan Lounge</option>
                          <option value="10008">Tipsy Monkey Bar & Lounge</option>
                          <option value="10012">Kilo Lounge Jakarta</option>
                        <optgroup label="Fine Dining">
                          <option value="10001">Amuz at SCBD</option>
                          <option value="10002">Namaaz Dining </option>
                          <option value="10004">Henshin at The Westin</option>
                        <optgroup label="Casual Dining">
                          <option value="10017">Bottega Ristorante</option>
                          <option value="10019">Le Quartier </option>
                          <option value="10009">Hause Rooftop</option>
                        <optgroup label="All You Can Eat">
                          <option value="10006">Kintan Buffet</option>
                          <option value="10003">3 Wise Monkeys</option>
                        <optgroup label="Live Music">
                          <option value="10023">SKYE</option>
                          <option value="10030">Piston Brake Bikers</option>
                     </select>
                    </div>
                     <div class="col-sm-3" >
                        <br><a style="font-size:20px; font-weight:bold;"> Date</a>
                        <input type="date" id="date" name="hari_reservasi" style="width: 340%;"><br><br>
                    </div>

                    <div class="dropdown">
                    <label for="time" style="font-size:20px; font-weight:bold;">Reservation Time : </label><br>
                    <select name="jam_reservasi" >
                        <option>10.00 - 12.00</option>
                        <option>13.00 - 15.00</option>
                        <option>16.00 - 18.00</option>
                        <option>19.00 - 21.00</option>
                     </select> <br>
                    </div>
                     <br><div class="col-sm-6" >
                        <a style="font-size:20px; font-weight:bold;">Guest</a><br>
                        <input type="text" name="jumlah" style="width: 170%;" placeholder="e.g. '1'"/>
                    </div><br>
                    <div class="col-sm-6" >
                        <a style="font-size:20px; font-weight:bold;">Special Request</a><br>
                        <input type="text" name="srequest" style="width: 170%;" placeholder="e.g., non - smoking area, outdoor, etc."></input> 
                    </div><br>
                    <center>
                    <input style="border: none; margin-left:-50px;
                    color: rgba(250.00000029802322, 242.00000077486038, 218.00000220537186, 1);
                    font-size: 15px;
                    font-family: Roboto;
                    font-size:22px;
                    width: 50%;
                    border-radius: 10px;
                    margin-top: 30px;
                    background-color: #E28F83;" type="submit" id="reserve" name="reserve" value="RESERVE">
                </center>
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
                <img src="{{asset('images/logo.png')}}" style=" width:270px;height:270px;margin-top:-230px;margin-left:1070px;">
            </div>
        </div>
    </div>
    <div class="footer2" style="background-color:#8E9775; height:30px;"></div>
</div>

    </body>
</html>