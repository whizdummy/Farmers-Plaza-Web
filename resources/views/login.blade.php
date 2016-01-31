@extends('parent')
@section('mainBody')
	<div class="wrapper">
	    <article class="main white mainArticle" style="margin-top: 20px;"> <!--START OF MAIN-->    
	      <div class="row container">   
	      <h1 class="green-text center text-darken-4">Log In</h1>
	      	<form action="{{URL::to('/verifyUser')}}" method="POST" class="col s12">
	      	      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

	      	      <div class="row">
	      	        <div class="input-field col s6">
	      	          <input  id="username" type="text" class="validate black-text" name="userName">
	      	          <label for="username">Username</label>
	      	        </div>

	      	        <div class="input-field col s6">
	      	          <input id="password" type="password" class="validate black-text" name="userPass">
	      	          <label for="password">Password</label>
	      	        </div>
	      	      </div>

	      	      <div class="row">
	      	
	      	        <div class="col s12 center">
	      	           <button class="btn waves-effect waves-light green center" type="submit" name="action">LOG IN
	      	           <i class="material-icons right">send</i>
	      	         </button>           
	      	        </div>                      
	      	      </div>                  
	      	</form>
	      </div>
	    </article>  <!--END OF MAIN--> 
	        <aside class="aside aside-1">
	           
	        </aside>
	        <aside class="aside aside-2">

	        </aside>
	</div>


		<script type="text/javascript">
			$(document).ready(function() {
			$('select').material_select();
			});
		</script>
@endsection