@extends('parent')
@section('mainBody')
	<div class="wrapper">
	    <article class="main white mainArticle"> <!--START OF MAIN-->    
	      <div class="row container">   

      		<div id='addTask'>
      			<form action="/addTask" method="post">
      				<h4>Add Task</h4>
      				<div class="row">
      					<div class="input-field col s12">
	      					<select name='crop' id="crop">
	      					<option value='' disabled selected>Choose your option</option>
	      					@foreach($results as $result => $cropResult)
	      						<option value='{{$cropResult}}'>{{$cropResult}}</option>
	      					@endforeach
	      					</select><label>Crop</label>
      					</div>

      					<div class="input-field col s12">
	      					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	      					<input type="text" name="taskName" id="txtTaskName">
	      					<label for="txtTaskName">Task Name</label>
 						</div>

 						<div class="input-field col s12">
	      					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	      					<input type="text" name="taskDuration" id="taskDuration">
	      					<label for="taskDuration">Task Duration</label>
 						</div>
      				</div>
      				
      				<div class="row">
      					<button class="btn waves-effect waves-light" type="submit" name="action" value="submit">SUBMIT
	                     <i class="material-icons right">send</i>
	                   </button>
      				</div>
      			</form>	
      		</div>

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