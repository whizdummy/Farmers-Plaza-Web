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
              gaZtronaut.com is the world's first social network platform exclusively designed for recruitment of Restaurant Professionals
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
        <article class="main white"> <!--START OF MAIN-->    
          <div class="row container">         
              <form action="#" class="col s12">
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">Username</label>
                      </div>
                      <div class="input-field col s6">
                        <input id="last_name" type="password" class="validate">
                        <label for="last_name">Password</label>
                      </div>
                    </div>

                    <div class="row">
                      <button class="btn waves-effect waves-light" type="submit" name="action">LOG IN
                         <i class="material-icons right">send</i>
                       </button>
                    </div>
                    <div class="row">
                      <a class="btn waves-effect waves-light" href="#">SIGN UP
                         <i class="material-icons right">send</i>
                       </a>
                    </div>
              </form>
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
      <h3 class="col s12 lime-text bold center" align="center">Check out our app in Play Store!</h3>
        <div class="col s12">
          <h5 class="white-text thin center" align="center">
            Pictures here
          </h5>
          <h5 class="white-text thin center" align="center">Pictures here
          </h5>
        </div>
        <a class="waves-effect waves-light btn-large"><i class="material-icons left">shop</i>Install now!</a>
      </div>
    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container section scrollspy" id="madeFor">
        <div class="row center">
          <h3 class="header col s12 bold white-text">Made for...</h3>
        </div>
        <div class="row">
          <div class="col s4 center">
              <img src="{!! URL::asset('pictures/ic1.png') !!}" align="center" class="center" width="100" height="90">
              <h5 class="center thin">Chefs, Sous Chefs, Commis, Dishwashers,  Bakers and Pastry Chefs</h5>
          </div>

          <div class="col s4 center">
              <img src="{!! URL::asset('pictures/ic2.png') !!}" align="center" class="center" width="100" height="100">
              <h5 class="center thin">Maitre d', Head Waiters, Runners, Bus Boys
and Dining Room Professionals</h5>
          </div>

          <div class="col s4 center">         
              <img src="{!! URL::asset('pictures/ic3.png') !!}" align="center" class="center" width="100" height="100">
              <h5 class="center thin">Happy Bar Keepers, Drink Mixologists,
Bar DJs and Baristas</h5>
          </div>
        </div>

        <div class="row">
          <div class="col s4 center">
              <img src="{!! URL::asset('pictures/ic4.png') !!}" align="center" class="center" width="100" height="100">
              <h5 class="center thin">Sommeliers, Wine Waiters

and Field Experts</h5>
          </div>

          <div class="col s4 center">
              <img src="{!! URL::asset('pictures/ic5.png') !!}" align="center" class="center" width="100" height="100">
              <h5 class="center thin">Bosses, Managers, Owners, Chef Patrons

and industry related businesses</h5>
          </div>

          <div class="col s4 center">         
              <img src="{!! URL::asset('pictures/ic6.png') !!}}" align="center" class="center" width="100" height="100">
              <h5 class="center thin">Catering, Suppliers, Food Trucks,

Importers and Associates</h5>
          </div>
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

     <div class="col hide-on-small-only m3 l2" style="position: fixed;">
        <ul class="section table-of-contents">
          <li><a href="#index-banner">Home</a></li>
          <li><a href="#ourWorld">Our World</a></li>
          <li><a href="#madeFor">Made for</a></li>
          <li><a href="#cross">Cross Platform</a></li>
        </ul>
     </div>

   
  <script type="text/javascript">
    $(document).ready(function(){
       $('.scrollspy').scrollSpy();
     });
  </script>
 
