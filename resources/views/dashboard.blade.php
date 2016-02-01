@extends('parent')
@section('mainBody')
	<div class="wrapper">
	    <article class="main white mainArticle">

	            <nav class=" green darken-4 ">
	            	<div class="nav-wrapper">
	            		<h5 href="#" class="brand-logo center white-text">Dashboard</h5>
	            		<ul id="nav-mobile" class="left hide-on-med-and-down">
        		       		<a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu white-text center"></i></a>
        		     	 </ul>
	            		
	            	</div>
	      	      <ul id="slide-out" class="side-nav">
	      	        <li><a href="farm_dashboard">View Farm</a></li>
	      	        <li><a href="crop_dashboard">View Crops</a></li>
	      	      </ul>
	            </nav> <!--START OF MAIN-->    
	      @yield('article')
	    </article>  <!--END OF MAIN--> 
	        <aside class="aside aside-1">
	        	
	        	
	        	
	        </aside>
	        <aside class="aside aside-2">

	        </aside>
	</div>

	<script type="text/javascript">
		// Initialize collapse button
		  $(".button-collapse").sideNav();
		  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
		  //$('.collapsible').collapsible();
	</script>

	<style type="text/css">
		header, main, footer {
		    padding-left: 240px;
		  }

		  @media only screen and (max-width : 992px) {
		    header, main, footer {
		      padding-left: 0;
		    }
		  }
	</style>

@endsection