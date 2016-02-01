@extends('parent')
@section('mainBody')
  <div id="index-banner" class="parallax-container section scrollspy">
    <div class="row" style="margin-top: 10px;">
      <div class="col s12" align="middle">
        <img src="{{URL::asset('pictures/logo.png')}}" width="400" height="400"><br>
        <h1 class="white-text thin">Farm2D</h1>
        <h4 class="white-text light center" >Farm Management System with 2D Mapping</h4>
        <div class="row">
          <div class="col s6">
            <i class="material-icons large green-text">person_add</i>
            <p class="white-text light container">
                Farm2D.com makes your life easier! For modern management technologies thru your mobile phone!
            </p>
          </div>

          <div class="col s6">
          <i class="material-icons large green-text">location_city</i>
            <p class="white-text light container">
              We provide you with powerful and tailored recruitment tools for your business - for free
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="wrapper">
        <article class="main"> <!--START OF MAIN-->    
          <div class="row container">         
              
          </div>
        </article>  <!--END OF MAIN--> 
            <aside class="aside aside-1">
               
            </aside>
            <aside class="aside aside-2">

            </aside>
    </div>  
     <div class="parallax"><img src="{!! URL::asset('pictures/background1.jpg') !!}" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section scrollspy" id="ourWorld">
      <div class="row">
      <h3 class="col s12 white-text bold center" align="center">Check out our app in Play Store!</h3>
        <div class="col s12 center">
          <img src="{!! URL::asset('pictures/mobPics.png') !!}" width="60%" height="50%">
        </div>

        <div class="col s12 center">
           <a class="waves-effect waves-light btn-large center"><i class="material-icons left">shop</i>Install now!</a>
        </div>
      </div>
    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container section scrollspy" id="madeFor">
        <div class="row center">
          <h3 class="header col s12 bold white-text">Made with 2D Mapping</h3>
        </div>

      </div>
    </div>
    <div class="parallax"><img src="{!! URL::asset('pictures/background2.jpg') !!}" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3 class="yellow-text text-lighten-2 bold">Easy to register... easy to use.</h3>
          <div>
            <h5 class="thin center-align white-text">We are currently operating in testing mode, this will not bother you more than the occasional bug or extra loading time. Registration can be completed manually or quickly using Facebook</h5><br>
          </div>
          <div>
            <h5 class="thin center-align white-text">Thereafter, you are free to find restaurant jobs in the Philippines using the best recruitment tool on the market</h5>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container section scrollspy" id="cross">
        <div class="row center">
          <h3 class="header col s12 light">Responsive Cross-Browser Compatibility</h3>
          <div class="center" align="center">
            <img src="{!! URL::asset('pictures/devices.png') !!}" width="50%" height="50%">
          </div>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{!! URL::asset('pictures/background3.jpg') !!}" alt="Unsplashed background img 3"></div>
  </div>
@endsection

@section('navbar')
<li><a class="waves-effect waves-light btn green darken-4 white-text">LOG IN</a></li>
@endsection
 
