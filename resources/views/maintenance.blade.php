@extends('parent')
@section('mainBody')
		<div class="wrapper">
		    <article class="main white mainArticle"> <!--START OF MAIN-->    
		      <div class="row container">         
		          <form action="#" class="col s12">
		                <div class="row">
							<div class="input-field col s6" id="cropSelect">
								<select>
									<option value="" disabled selected>Choose your option</option>
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
								</select>
								<label>Crop Type</label>
							</div>

							<script type="text/javascript">
								$(document).ready(function() {
								$('select').material_select();
								});
							</script>

							<p class="col s6">
								<input type="checkbox" id="newCropType" />
								<label for="newCropType">New Crop type?</label>
							</p>

							<div class="input-field col s12">
					          <input id="cropName" type="text" class="validate">
					          <label for="cropName">Crop Name</label>
					        </div>
		                </div>

		                <div class="row">
		                	<h5 class="s12 center">PH</h5>
		                	<div class="input-field col s6">
					          <input id="minPH" type="text" class="validate">
					          <label for="minPH">Minimum PH</label>
					        </div>

					        <div class="input-field col s6">
					          <input id="maxPH" type="text" class="validate">
					          <label for="maxPH">Maximum PH</label>
					        </div>
		                </div>

		                <div class="row">
		                	<h5 class="s12 center">Sunlight</h5>
		                	<div class="input-field col s6">
					          <input id="minSunlight" type="text" class="validate">
					          <label for="minSunlight">Minimum Sunlight</label>
					        </div>

					        <div class="input-field col s6">
					          <input id="maxSunlight" type="text" class="validate">
					          <label for="maxSunlight">Maximum Sunlight</label>
					        </div>
		                </div>

		                <div class="row">
		                	<h5 class="s12 center">Moisture</h5>
		                	<div class="input-field col s6">
					          <input id="minMoisture" type="text" class="validate">
					          <label for="minMoisture">Minimum Moisture</label>
					        </div>

					        <div class="input-field col s6">
					          <input id="maxMoisture" type="text" class="validate">
					          <label for="maxMoisture">Maximum Moisture</label>
					        </div>
		                </div>

		                <div class="row">
		                	<h5 class="s12 center">Temperature</h5>
		                	<div class="input-field col s6">
					          <input id="minTemp" type="text" class="validate">
					          <label for="minTemp">Minimum Temperature</label>
					        </div>

					        <div class="input-field col s6">
					          <input id="maxTemp" type="text" class="validate">
					          <label for="maxTemp">Maximum Temperature</label>
					        </div>
		                </div>

		                <div class="row">
		                	<h5 class="s12 center">Planting Distance(sq. meter)</h5>
		                	<div class="input-field col s12">
					          <input id="plantDist" type="text" class="validate">
					          <label for="plantDist">Planting Distance</label>
					        </div>
		                </div>

		                <div class="row">
		                	<h5 class="s12 center">Season of the Month</h5>
		                	<div class="input-field col s6" id="cropSelect">
								<select>
									<option value="" disabled selected>Choose your option</option>
									<option value="1">Dry</option>
									<option value="2">Wet</option>
								</select>
								<label>Season</label>
							</div>
		                </div>

		                <div class="row">
		                	<h5 class="s12 center">Fertilizer</h5>
		                	<div class="input-field col s6" id="cropSelect">
								<select>
									<option value="" disabled selected>Choose your option</option>
									<option value="1">Dry</option>
									<option value="2">Wet</option>
								</select>
								<label>Fertilizer</label>
							</div>
		                </div>

		                 <div class="row">
		                	<h5 class="s12 center">Fertilizer Amount</h5>
		                	<div class="input-field col s12">
					          <input id="fertAmt" type="text" class="validate">
					          <label for="fertAmt">Amount</label>
					        </div>
		                </div>

						<div class="row">
							<button onclick="myFunction()" class="btn waves-effect waves-light">Add Task</button>

							<script>
							function myFunction() {

								var addTask = document.createElement("div")
								addTask.class("input-field col s12");

							    var spcfcTaskTxt = document.createElement("input");
							    spcfcTaskTxt.type = "text";
							    spcfcTaskTxt.class = "validate";

							    var taskDesc = document.createElement("input");
							    taskDesc.type = "text";
							    taskDesc.class = "validate";

							    var taskDuration = document.createElement("input");
							    taskDuration.type = "text";
							    taskDuration.class = "validate";

							    var btn = document.createElement("button");
							    var t = document.createTextNode("CLICK ME");
							    btn.appendChild(t);

							    document.body.appendChild(btn);
							    

							}
							</script>
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
		</div> 


		<script type="text/javascript">
		// Checkbox behaviour
			if(document.getElementById('newCropType').checked){
				var cropSelect = document.getElementById("cropSelect");
				var newCropText = document.createElement("input");
				newCropText.type = "text";
				cropSelect.parentNode.replaceChild(newCropText, cropSelect);
			}
			   	
		</script>

@endsection