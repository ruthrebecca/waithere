<style>
    a{
          text-decoration: none;
          color: white;
      }
      a:hover{
          text-decoration: none;
          color: gray;
      }
</style>
<div class="container">
    <div class="row" style="text-align:left;">
        <div class="col-sm-3" >
            <img src="{{asset('images/logo.png')}}" style="text-align:left; width:70px; height:70px;margin-top:-13px;margin-left:-50px;">
        </div>
        <div class="col-sm-3" style="color: #FAF2DA;font-family: roboto;font-weight: bold; font-size:20px; margin-top: 7px;margin-left: -40px;">
            <a href="{{url('/')}}">Home</a>
        </div>
        <div class="col-sm-3" style="color: #FAF2DA;font-family: roboto;font-weight: bold; font-size:20px; margin-top: 7px;margin-left: -10px;">
            <a href="{{url('/resto')}}">Restaurants</a>
        </div>
        <div class="col-sm-3" style="color: #FAF2DA;font-family: roboto;font-weight: bold; font-size:20px; margin-top: 7px;margin-left: 45px;">
            {{-- @if(session('user')) --}}
            <a  href="{{url('/reservasiku')}}">Reservasiku</a>
            {{-- @endif --}}
        </div>
    </div>
    <div class="col-sm-3" class="form-outline" style="z-index: 100">
        <form method="get" action="{{url('resto/search')}}">
            <input type="hidden" name="col" value="nama_restoran">
            <input name="key" type="text"  class="form-control" placeholder="Search" style="margin-left:428px;margin-top: -15px;height:30px; border-radius:30px;font-size:15px; background-color: #FAF2DA; z-index:10" aria-label="Search" />
        </form>
    </div>
    <div class="col-sm-5" style="z-index: 90">
        <img src="{{asset('images/user.png')}}" align="right" style="width:40px; height:40px;margin-top:-13px;margin-right:60px;">
    </div>
    <div class="col-sm-8" align="right" style="color: #FAF2DA;font-family: roboto;font-weight: bold; font-size:20px;margin-top:-75px;margin-left:450px;">
        @if(!session('user'))
            <a href="{{url('login')}}">Login</a>
        @else
            <a href="{{url('logout')}}">Logout</a>
        @endif
        </div>
    </div>
</div>
