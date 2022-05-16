<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/register.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <title>Sign Up</title>
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
            <center>
            <img src="images/logo.png" style="width:1200px; height:1200px;margin-top:-250px;margin-left:-550px;position:absolute;opacity:0.3;">
            <h1><u>REGISTER NEW ACCOUNT</u></h1>
        <div class="box" align="center"style="position:relative;">
            <div class="content">
                <form method="POST" action="{{url('/register/store')}}"><br>
                    @csrf
                    <a style="font-family: Roboto; font-size: 18px; color: #4A503D; margin-right: 280px;">Name</a><br>
                    <input type="text" name="nama_user"><br><br>
                    <a style="font-family: Roboto; font-size: 18px; color: #4A503D; margin-right: 285px;">Email</a><br>
                    <input type="text" name="email_user"><br><br>
                    <a style="font-family: Roboto; font-size: 18px; color: #4A503D; margin-right: 220px;">Phone Number</a><br>
                    <input type="number" name="notelp_user"><br><br>
                    <a style="font-family: Roboto; font-size: 18px; color: #4A503D; margin-right: 260px;">Username</a><br>
                    <input type="text" name="username"><br><br>
                    <a style="font-family: Roboto; font-size: 18px; color: #4A503D; margin-right: 260px;">Password</a><br>
                    <input type="password" name="password"><br>
                    <br><br>
                    <input style="color:#FAF2DA; font-size: 18px;" type="submit" id="register" value="REGISTER">
                    <br><br><br>
                    <div class="account">Have an account? <a style="color:#4A503D;" href="{{url('login')}}">Login now!</a></div>
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