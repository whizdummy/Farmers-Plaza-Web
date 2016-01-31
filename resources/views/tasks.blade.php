@extends('parent')
@section('mainBody')
	<div class="wrapper">
	    <article class="main white mainArticle"> <!--START OF MAIN-->    
	      <div class="row container">   
	      	<div id='addTaskCategory'>
	      		<form action="/addTaskCategory" method="post">
	      			<div class="input-field col s12" id="before">
			          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	      				Add Task Category: <input type="text" name="taskCategoryName"><br>
	      				<input type="submit" value="submit">
			        </div>	
	      		</form>	
	      		</div>

	      		<div id='addTask'>
	      			<form action="/addTask" method="post">

	      				<h4>Task Category</h4>
	      				<div class="input-field col s12">
	      					<select name='taskCategory' id="taskCategory">
	      					<option value='' disabled selected>Choose your option</option>
	      					@foreach($results[0] as $result => $taskCategoryResult)
	      						<option value='{{$taskCategoryResult}}'>{{$taskCategoryResult}}</option>
	      					@endforeach
	      					</select>
	      				</div>
	      				
	      				<div class="input-field col s12">
	      					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	      					Add Task: <input type="text" name="taskName"><br>
	      					Duration: <input type="text" name="taskDuration"><br>
	      					<input type="submit" value="submit">
	      				</div>
	      				
	      			</form>	
	      		</div>

	      		<div id='assignTask'>
	      			<form action="/assignTask" method="post">
	      				
	      				<label>Crop</label>

	      				<div class="input-field col s12">
	      					<select name='crop' id="crop">
	      					<option value='' disabled selected>Choose your option</option>
	      					@foreach($results[0] as $result => $cropResult)
	      						<option value='{{$cropResult}}'>{{$cropResult}}</option>
	      					@endforeach
	      					</select>
	      				</div>
	      				

	      				<label>Task</label>

	      				<div>
	      					<select name='task' id="task">
	      					<option value='' disabled selected>Choose your option</option>
	      					@foreach($results[0] as $result => $taskResult)
	      						<option value='{{$taskResult}}'>{{$taskResult}}</option>
	      					@endforeach
	      					</select>
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
	<!-- <div id='addTaskCategory'>
		<form action="/addTaskCategory" method="post">
			
			Add Task Category: <input type="text" name="taskCategoryName"><br>
			<input type="submit" value="submit">
		</form>	
	</div>

	<div id='addTask'>
		<form action="/addTask" method="post">
			<?php outputTaskCategory(); ?>
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			Add Task: <input type="text" name="taskName"><br>
			Duration: <input type="text" name="taskDuration"><br>
			<input type="submit" value="submit">
		</form>	
	</div>

	<div id='assignTask'>
		<form action="/assignTask" method="post">
			Crop: <?php outputCrops(); ?><br>
			Task: <?php outputTasks(); ?><br>
			<input type="submit" value="submit">
		</form>
	</div> -->



	<?php
		function outputTaskCategory(){
			echo "<select name='taskCategory'>";
			echo "<option value='' disabled selected>Choose your option</option>";
			foreach ($results[0] as $result => $taskCategoryResult) {
				echo "<option value='". $taskCategoryResult ."'>". $taskCategoryResult ."</option>";
			}
			echo "</select><label>TaskCategory</label>";
		}

		function outputCrops(){
			echo "<select name='crop'>";
			echo "<option value='' disabled selected>Choose your option</option>";
			foreach ($results[1] as $result => $cropResult) {
				echo "<option value='". $cropResult ."'>". $cropResult ."</option>";
			}
			echo "</select><label>Crops</label>";
		}

		function outputTasks(){
			echo "<select name='task'>";
			echo "<option value='' disabled selected>Choose your option</option>";
			foreach ($results[2] as $result => $taskResult) {
				echo "<option value='". $taskResult ."'>". $taskResult ."</option>";
			}
			echo "</select><label>Task</label>";
		}


	?>
@stop
@endsection