@extends('parent')
@section('mainBody')

		<div class="wrapper">
		    <article class="main white mainArticle"> <!--START OF MAIN-->    
		      <div class="row container">   
		      	  <h4 class="center green-text text-darken-4">Maintenance</h4>      
		          <form action="/submitForm" method="POST" class="col s12">
		          		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		                <div class="row" id="cropParent">
							<div class="input-field col s6" id="cropSelect">
								<select name="cropType">
									<option value="" disabled selected>Choose your option</option>
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
								</select>
								<label>Crop Type</label>
							</div>

							<div class="newCropType input-field col s6" id="newCrop">

							</div>

							<div class="col s6">
								<button type="button" class="btn waves-light" onclick="addElementCrop()">New Crop Type</button>
							</div>

							<div class="input-field col s12" id="before">
					          <input id="cropName" type="text" class="validate">
					          <label for="cropName">Crop Name</label>
					        </div>
		                </div>

		                <div class="row">
		                	<h5 class="s12 center">PH</h5>
		                	<div class="input-field col s6">
					          <input id="minPH" type="text" class="validate" name="minPh">
					          <label for="minPH">Minimum PH</label>
					        </div>

					        <div class="input-field col s6">
					          <input id="maxPH" type="text" class="validate" name="maxPh">
					          <label for="maxPH">Maximum PH</label>
					        </div>
		                </div>

		                <div class="row">
		                	<h5 class="s12 center">Sunlight</h5>
		                	<div class="input-field col s6">
					          <input id="minSunlight" type="text" class="validate" name="minSunlight">
					          <label for="minSunlight">Minimum Sunlight</label>
					        </div>

					        <div class="input-field col s6">
					          <input id="maxSunlight" type="text" class="validate" name="maxSunlight">
					          <label for="maxSunlight">Maximum Sunlight</label>
					        </div>
		                </div>

		                <div class="row">
		                	<h5 class="s12 center">Moisture</h5>
		                	<div class="input-field col s6">
					          <input id="minMoisture" type="text" class="validate" name="minMoisture">
					          <label for="minMoisture">Minimum Moisture</label>
					        </div>

					        <div class="input-field col s6">
					          <input id="maxMoisture" type="text" class="validate" name="maxMoisture">
					          <label for="maxMoisture">Maximum Moisture</label>
					        </div>
		                </div>

		                <div class="row">
		                	<h5 class="s12 center">Temperature</h5>
		                	<div class="input-field col s6">
					          <input id="minTemp" type="text" class="validate" name="minTemp">
					          <label for="minTemp">Minimum Temperature</label>
					        </div>

					        <div class="input-field col s6">
					          <input id="maxTemp" type="text" class="validate" name="maxTemp">
					          <label for="maxTemp">Maximum Temperature</label>
					        </div>
		                </div>

		                <div class="row">
		                	<h5 class="s12 center">Planting Distance(sq. meter)</h5>
		                	<div class="input-field col s12">
					          <input id="plantDist" type="text" class="validate" name="plantDist">
					          <label for="plantDist">Planting Distance</label>
					        </div>
		                </div>

		                <div class="row">
		                	<h5 class="s12 center">Season of the Month</h5>
		                	<div class="input-field col s6" id="cropSelect">
								<select name="season">
									<option value="" disabled selected>Choose your option</option>
									<option value="1">Dry</option>
									<option value="2">Wet</option>
								</select>
								<label>Season</label>
							</div>
		                </div>

		                <div class="row" id="fertParent">
		                	<h5 class="s12 center">Fertilizer</h5>
		                	<div class="input-field col s6" id="fertSelect">
								<select name="fertSelect">
									<option value="" disabled selected>Choose your option</option>
									<option value="1">Dry</option>
									<option value="2">Wet</option>
								</select>
								<label>Fertilizer</label>
							</div>

							<div class="newFertType input-field col s6" id="newFert">

							</div>

							<div class="col s6">
								<button type="button" class="btn waves-light" onclick="addElementFert()">New Fertilizer Type</button>
							</div>
		                </div>



		                 <div class="row">
		                	<h5 class="s12 center">Fertilizer Amount</h5>
		                	<div class="input-field col s12">
					          <input id="fertAmt" type="text" class="validate" name="fertAmts">
					          <label for="fertAmt">Amount</label>
					        </div>
		                </div>

		                <div class="row">
		                	<h5 class="s12 center"> Tasks</h5>
		                	<span>No tasks yet</span>
		                </div>

						<div class="row">
							<button type="button" data-target="modal1" class="btn modal-trigger">Add Task</button>
						</div>

						

		                <div class="row">
		                  <button class="btn waves-effect waves-light" type="submit" name="action">SUBMIT
		                     <i class="material-icons right">send</i>
		                   </button>
		                </div>
		          </form>
		      </div>
		    </article>  <!--END OF MAIN--> 
		        <aside class="aside aside-1">
		           
		        </aside>
		        <aside class="aside aside-2">

		        </aside>

		     	<!-- Modal Structure -->
		     	<div id="modal1" class="modal">
		     	  <div class="modal-content">
		     	    <h4 class="row center">Add a task</h4>
		     	    <form action="#" class="col s12">
		     	    	<div class="container">
		     	    		<div class="row" id="parentTask">
		     	    			<div class="input-field col s6" id="taskSelect">
		     	    				<select>
		     	    					<option value="" disabled selected>Choose your option</option>
		     	    					<option value="1">Option 1</option>
		     	    					<option value="2">Option 2</option>
		     	    					<option value="3">Option 3</option>
		     	    				</select>
		     	    				<label>Task Category</label>
		     	    			</div>

		     	    			<div class="newCatType input-field col s6" id="newTask">

		     	    			</div>

		     	    			<div class="col s6">
		     	    				<button type="button" class="btn waves-light" onclick="addElementTaskCategory()">New Category Type</button>
		     	    			</div>
		     	    		</div>
		     	    		<div class="row">
		         		        <div class="input-field col s6">
		         		          <input id="taskDescription" type="text" class="validate">
		         		          <label for="taskDescription">Task Description</label>
		         		        </div>
		         		        <div class="input-field col s6">
		         		          <input id="taskDuration" type="text" class="validate">
		         		          <label for="taskDuration">Task Duration</label>
		         		        </div>

		         		        

		         		        <div class="modal-footer">
		         		          <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat" type="submit">Agree</a>
		         		        </div>
		         		     </div>
		     	    	</div>
		     	    	
		     	    </form>
		     	  </div>
		     	</div>
		</div> 

		<script type="text/javascript">
			$(document).ready(function() {
			$('select').material_select();
			});
		</script>


		<script type="text/javascript">
		// btnAddNewCrop behaviour
		function addElementCrop() { 
		  var newDiv = document.createElement("div"); 
		  newDiv.class = "input-field col s6";
		  var inpot = document.createElement("input");
		  inpot.type = "text";
		  inpot.class = "validate";
		  inpot.id = "newcroptype";
		  inpot.placeholder = "New Crop Type";
		  newDiv.appendChild(inpot);
		  var newcrop = document.getElementById("newCrop");

		  var parent = document.getElementById("cropParent");
		  var child = document.getElementById("cropSelect");

		  parent.removeChild(child);
		  newcrop.appendChild(newDiv);
		}

		function addElementFert() { 
		  var newDiv2 = document.createElement("div"); 
		  newDiv2.class = "input-field col s6";
		  var inpot2 = document.createElement("input");
		  inpot2.type = "text";
		  inpot2.class = "validate";
		  inpot2.id = "newferttype";
		  inpot2.placeholder = "New Fertilizer Type";
		  newDiv2.appendChild(inpot2);
		  var newfert = document.getElementById("newFert");

		  var parent2 = document.getElementById("fertParent");
		  var child2 = document.getElementById("fertSelect");
		  parent2.removeChild(child2);
		  newfert.appendChild(newDiv2);
		}

		function addElementTaskCategory() { 
		  var newDiv3 = document.createElement("div"); 
		  newDiv3.class = "input-field col s6";
		  var inpot3 = document.createElement("input");
		  inpot3.type = "text";
		  inpot3.class = "validate";
		  inpot3.id = "newcarttype";
		  inpot3.placeholder = "New Cartegory Type";
		  newDiv3.appendChild(inpot3);
		  var newtask = document.getElementById("newTask");

		  var parent3 = document.getElementById("parentTask");
		  var child3 = document.getElementById("taskSelect");
		  parent3.removeChild(child3);
		  newtask.appendChild(newDiv3);
		}

		</script>

		<script type="text/javascript">
			$(document).ready(function(){
			  // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
			  $('.modal-trigger').leanModal();
			});
		</script>

@endsection