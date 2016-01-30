@extends('parent')
@section('mainBody')
	<div id='addTaskCategory'>
		<form action="/addTaskCategory" method="post">
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
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
	</div>



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