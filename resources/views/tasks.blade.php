@extends('parent')
@section('mainBody')

	<div class="wrapper">
	    <article class="main white mainArticle"> <!--START OF MAIN-->    
	      <div class="row container">   
	      	<form action="/addTaskCategory" method="post">
	      	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	      		<div class="row">
		      		<div class="input-field col s6">
						<p>
							<input name="grpTask" type="radio" id="test1"  onclick="document.getElementById('newTaskTxt').disabled = true; document.getElementById('taskSelect').removeAttribute(disabled);"/>
							<label for="grpTask">Choose task type</label>
						</p>
						<p>
							<input name="group1" type="radio" id="test2"  onclick="document.getElementById('taskSelect').disabled = true; document.getElementById('newTaskTxt').disabled = false;"/>
							<label for="test2">New task type</label>
						</p>
						</div>

						<div class="input-field col s6">
							<select name='taskType' id="taskSelect">
								<option value='' disabled selected>Choose your option</option>
								@foreach($results[0] as $result => $cropTypeResult)
								<option value='{{$cropTypeResult}}'>{{$cropTypeResult}}</option>
								@endforeach
							</select><label>Crop Type</label>
						</div>

						<div class="input-field col s6">
						<input id="newTaskTxt" type="text" class="validate" name="newcroptype">
						<label for="newTaskTxt">New Task Type</label>
						</div>

						<div class="input-field col s12" id="before">
				          <input id="taskDurTxt" type="text" class="validate" name="cropName">
				          <label for="taskDurTxt">Task Duration</label>
				        </div>

				        <div class="col s12 center">
				        	<button class="btn waves-effect waves-light" type="submit" name="action">Submit
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