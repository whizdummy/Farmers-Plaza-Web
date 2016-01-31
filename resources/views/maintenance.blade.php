@extends('parent')
@section('mainBody')

		<div class="wrapper">
		    <article class="main white mainArticle"> <!--START OF MAIN-->    
		      <div class="row container">   
		      	  <h4 class="center green-text text-darken-4">Maintenance</h4>      
		          <form action="/submitForm" method="POST" class="col s12">
		          		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		                <div class="row" id="cropParent">
		                	<div class="input-field col s6">
		                			<p>
		                		     <input name="group1" type="radio" id="test1"  onclick="document.getElementById('newCropTxt').disabled = true; document.getElementById('cropSelect').removeAttribute(disabled);"/>
		                		     <label for="test1">Choose crop type</label>
		                		   </p>
		                		   <p>
		                		     <input name="group1" type="radio" id="test2"  onclick="document.getElementById('cropSelect').disabled = true; document.getElementById('newCropTxt').disabled = false;"/>
		                		     <label for="test2">New crop type</label>
		                		   </p>
		                	</div>

							<div class="input-field col s6" id="cropSelect">
								<select name='cropType' id="cropSelect">
								<option value='' disabled selected>Choose your option</option>
								@foreach($results[0] as $result => $cropTypeResult)
									<option value='{{$cropTypeResult}}'>{{$cropTypeResult}}</option>
								@endforeach
								</select><label>Crop Type</label>
							</div>

							<div class="input-field col s6">
					          <input id="newCropTxt" type="text" class="validate" name="newcroptype">
					          <label for="newCropTxt">New Crop Type</label>
					        </div>

					        <h5 class="s12 center">Crop Name</h5>
							<div class="input-field col s12" id="before">
					          <input id="cropName" type="text" class="validate" name="cropName">
					          <label for="cropName">Crop Name</label>
					        </div>

					        <h5 class="s12 center">Crop Price</h5>
							<div class="input-field col s12" id="before">
					          <input id="cropPrice" type="text" class="validate" name="cropPrice">
					          <label for="cropPrice">Crop Price</label>
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

		                <div class="row">
		                	<div class="input-field col s6">
		                		<p>
		                	     <input name="fertgroup" type="radio" id="test3"  onclick="document.getElementById('newFertTxt').disabled = true; document.getElementById('fertSelect').removeAttribute(disabled);"/>
		                	     <label for="test3">Choose Fertilizer type</label>
		                	   </p>
		                	   <p>
		                	     <input name="fertgroup" type="radio" id="test4"  onclick="document.getElementById('fertSelect').disabled = true; document.getElementById('newFertTxt').disabled = false;"/>
		                	     <label for="test4">New Fertilizer type</label>
		                	   </p>
		                	</div>
			             
		                	<h5 class="s12 center">Fertilizer</h5>
		                	<div class="input-field col s6" id="fertSelect">
		                		<select name='fertSelect'>
								<option value='' disabled selected>Choose your option</option>
								@foreach($results[1] as $result => $cropFertResult)
									<option value="{{$cropFertResult}}">{{$cropFertResult}}</option>
								@endforeach
								</select><label>Fertilizer</label>
							</div>

							<div class="input-field col s6">
					          <input id="newFertTxt" type="text" class="validate" name="newferttype">
					          <label for="newFertTxt">New Fertilizer Type</label>
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

		<?php

			function outputSelectCropType(){
				// echo "<select name='cropType'>";
				// echo "<option value='' disabled selected>Choose your option</option>";
				// foreach ($results[0] as $result => $cropTypeResult) {
				// 	echo "<option value='". $cropTypeResult ."'>". $cropTypeResult ."</option>";
				// }
				// echo "</select><label>Crop Type</label>";
			}

			function outputSelectFertType(){
				// echo "<select name='fertSelect'>";
				// echo "<option value='' disabled selected>Choose your option</option>";
				// foreach ($results[1] as $result => $cropFertResult) {
				// 	echo "<option value='". $cropFertResult ."'>". $cropFertResult ."</option>";
				// }
				// echo "</select><label>Fertilizer</label>";
			}
		?> 

		<script type="text/javascript">
			$(document).ready(function() {
			$('select').material_select();
			});
		</script>

@endsection