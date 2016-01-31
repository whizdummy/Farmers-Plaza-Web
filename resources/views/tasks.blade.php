@extends('parent')
@section('mainBody')
	<div class="wrapper">
	    <article class="main white mainArticle"> <!--START OF MAIN-->    
	      <div class="row container">   

	      	<div id='addTaskCategory'>
	      		<form action="/addTaskCategory" method="post">
	      		<h4>Task Category Name</h4>
	      			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	      			<div class="row">
		      			<div class="input-field col s12" id="before">
		      				<input type="text" name="taskCategoryName" id="taskCategoryName">
		      				<label for="taskCategoryName">Task Category Name</label>
				        </div>

				         <div class="row">
	      					<button class="btn waves-effect waves-light" type="submit" name="action" value="submit">SUBMIT
		                     <i class="material-icons right">send</i>
		                   </button>
	      				</div>	
	      			</div>	       
	      		</form>	
	      	</div>

      		<div id='addTask'>
      			<form action="/addTask" method="post">
      				<h4>Task Category</h4>
      				<div class="row">
      					<div class="input-field col s12">
	      					<select name='taskCategory' id="taskCategory">
		      					<option value='' disabled selected>Choose your option</option>
		      					@foreach($results[0] as $result => $taskCategoryResult)
		      						<option value='{{$taskCategoryResult}}'>{{$taskCategoryResult}}</option>
		      					@endforeach
	      					</select><label>Task Category</label>
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

      		<div id='assignTask'>
      			<form action="/assignTask" method="post">
      				<h4>Crop</h4>

      				<div class="row">
      					<div class="input-field col s12">
	      					<select name='crop' id="crop">
	      					<option value='' disabled selected>Choose your option</option>
	      					@foreach($results[1] as $result => $cropResult)
	      						<option value='{{$cropResult}}'>{{$cropResult}}</option>
	      					@endforeach
	      					</select>
      					</div>

      					<h4>Task</h4>

      					<div class="input-field col s12">
	      					<select name='task' id="task">
		      					<option value='' disabled selected>Choose your option</option>
		      					@foreach($results[2] as $result => $taskResult)
		      						<option value='{{$taskResult}}'>{{$taskResult}}</option>
		      					@endforeach
	      					</select>
      					</div>
      				</div>

      				<div class="row">
      					<button class="btn waves-effect waves-light" type="submit" name="action" value="submit">SUBMIT
	                     <i class="material-icons right">send</i>
	                   </button>
      				</div>
      				<!-- <input type="submit" value="submit"> -->
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