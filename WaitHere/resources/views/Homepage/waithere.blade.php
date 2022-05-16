<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>WaitHere!</title>
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
        <div class="image" >
            <img src="images/waithere!.png" style="width: 1440px; height:1100px;">
        </div>
        <div class="pink" style="background-color:#E28F83; height: 350px;box-shadow: 5px 4px 3px #8E9775;">
            <br>
        <div class="container"><br>
            <div class="row" style="text-align:center;">
                <div class="col-sm-3" >
                    <a href="{{url('resto/search?col=kategori&key=Brunch')}}"><button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA; width: 200px; height:50px; border-radius:40px;">Brunch</button></a>
                </div>
                <div class="col-sm-3">
                    <a href="{{url('resto/search?col=kategori&key=Bar & Lounge')}}"><button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA;width: 200px; height:50px;border-radius:40px;">Bar & Lounge</button></a>
                </div>
                <div class="col-sm-3">
                    <a href="{{url('resto/search?col=kategori&key=Fast Food')}}"><button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA;width: 200px; height:50px;border-radius:40px;">Fast Food</button></a>
                </div>
                <div class="col-sm-3">
                    <a href="{{url('resto/search?col=kategori&key=Bakery')}}"><button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA;width: 200px; height:50px;border-radius:40px;">Bakery</button></a>
                </div>
                
            </div>
        </div>
        <br>
        <div class="container"><br>
            <div class="row" style="text-align:center;">
                <div class="col-sm-3" >
                    <a href="{{url('resto/search?col=kategori&key=Casual Dining')}}"><button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA; width: 200px; height:50px; border-radius:40px;">Casual Dining</button></a>
                </div>
                <div class="col-sm-3">
                    <a href="{{url('resto/search?col=kategori&key=All You Can Eat')}}"><button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA;width: 200px; height:50px;border-radius:40px;">All You Can Eat</button></a>
                </div>
                <div class="col-sm-3">
                    <a href="{{url('resto/search?col=kategori&key=Beverages')}}"><button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA;width: 200px; height:50px;border-radius:40px;">Beverages</button></a>
                </div>
                <div class="col-sm-3">
                    <a href="{{url('resto/search?col=kategori&key=Live Music')}}"><button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA;width: 200px; height:50px;border-radius:40px;">Live Music</button></a>
                </div>
            </div>
        </div>
        <br>
        <div class="container"><br>
            <div class="row" style="text-align:center;">
                <div class="col-sm-3" >
                    <a href="{{url('resto/search?col=kategori&key=Fine Dining')}}"><button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA; width: 200px; height:50px; border-radius:40px;">Fine Dining</button></a>
                </div>
                <div class="col-sm-3">
                    <a href="{{url('resto/search?col=kategori&key=Coffee Shop')}}"><button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA;width: 200px; height:50px;border-radius:40px;">Coffee Shop</button></a>
                </div>
                <div class="col-sm-3">
                    <a href="{{url('resto/search?col=kategori&key=Dessert')}}"><button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA;width: 200px; height:50px;border-radius:40px;">Dessert</button></a>
                </div>
                <div class="col-sm-3">
                    <a href="{{url('resto/search?col=kategori&key=Street Food')}}"><button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA;width: 200px; height:50px;border-radius:40px;">Street Food</button></a>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <center>
    <div class="bawah">
        <h1 style="text-shadow: 5px 4px 3px #8E9775;">POPULAR RESTAURANTS</h1>
    </div>
    <div class="container"><br>
		<div class="row" style="text-align:center;">
			<div class="col-sm-4" >
				<img src="images/amuz.png" style="box-shadow: 5px 4px 3px #8E9775;width:278px; height:164px;border-radius:10px;">
			</div>
			<div class="col-sm-4">
				<img src="images/hensin.png" style="box-shadow: 5px 4px 3px #8E9775;width:278px; height:164px;border-radius:10px;">
			</div>
			<div class="col-sm-4">
				<img src="images/namaaz.png" style="box-shadow: 5px 4px 3px #8E9775;width:278px; height:164px;border-radius:10px;">
            
            </div>
		</div>
        <div class="container"><br>
            <div class="row" style="text-align:center;">
                <div class="col-sm-4" >
                    <a href="{{url('resto/10001')}}"><button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#E28F83; width: 278px; height:48px; border-radius:10px;margin-top:-30px;margin-left:-15px;">Amuz At SCBD</button></a>
                </div>
                <div class="col-sm-4">
                    <a href="{{url('resto/10004')}}"><button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#E28F83;width: 278px; height:48px;border-radius:10px;margin-top:-30px;margin-left:0px;">Henshin At The Westin</button></a>
                </div>
                <div class="col-sm-4">
                    <a href="{{url('resto/10002')}}"><button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#E28F83;width: 278px; height:48px;border-radius:10px;margin-top:-30px;margin-left:15px;">Namaaz Dining</button></a>
                </div>
            </div>
        </div>
    </div>
        <br><br><br> 
        <h1 style="text-shadow: 5px 4px 3px #8E9775;">PEOPLE'S CHOICE</h1>
        <div class="container"><br>
            <div class="row" style="text-align:center;">
                <div class="col-sm-4" >
                    <img src="images/3wise.png" style="box-shadow: 5px 4px 3px #8E9775;width:278px; height:164px;border-radius:10px;">
                </div>
                <div class="col-sm-4">
                    <img src="images/pizza.png" style="box-shadow: 5px 4px 3px #8E9775;width:278px; height:164px;border-radius:10px;">
                </div>
                <div class="col-sm-4">
                    <img src="images/dear.png" style="box-shadow: 5px 4px 3px #8E9775;width:278px; height:164px;border-radius:10px;">
                
                </div>
            </div>
            <div class="container"><br>
                <div class="row" style="text-align:center;">
                    <div class="col-sm-4" >
                        <a href="{{url('resto/10003')}}"><button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#E28F83; width: 278px; height:48px; border-radius:10px;margin-top:-30px;margin-left:-15px;">3 Wise Monkeys</button></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{url('resto/10006')}}"><button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#E28F83;width: 278px; height:48px;border-radius:10px;margin-top:-30px;margin-left:0px;">Kintan Buffet</button></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{url('resto/10005')}}"><button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#E28F83;width: 278px; height:48px;border-radius:10px;margin-top:-30px;margin-left:15px;">Dear Butter</button></a>
                    </div>
                </div>
            </div>
        </div><br><br><br><br>
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
