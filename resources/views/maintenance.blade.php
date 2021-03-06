@extends('parent')
@section('mainBody')
		<div class="wrapper">
		    <article class="main white mainArticle"> <!--START OF MAIN-->    
		      <div class="row container">   
		      	  <h4 class="center green-text text-darken-4">Maintenance</h4>  
		      	  
		      	  	@if(Session::get('message') != null && Session::get('message') == 1)
		      	  		<p style="color:green;">Crops saved successfully</p>    
		      	  		{{Session::forget('message')}}
		      	  	@elseif(Session::get('message') != null && Session::get('message') == -1)
		      	  		<p style="color:red;">Error Saving</p> 
		      	  		{{Session::forget('message')}}
		      	  	@endif
		          <form action="/submitForm" method="POST" class="col s12">
		          		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		                <div class="row" id="cropParent">
		                	<div class="input-field col s6">
		                			<p>
		                		     <input name="group1" type="radio" id="test1"  onclick="chooseCropType()" checked="checked" />
		                		     <label for="test1">Choose crop type</label>
		                		   </p>
		                		   <p>
		                		     <input name="group1" type="radio" id="test2"  onclick="newCropType()"/>
		                		     <label for="test2">New crop type</label>
		                		   </p>
		                	</div>

							<div class="input-field col s6" id="cropSelect">
								<select name='cropType' id="cropSelect">
								<option value='' disabled selected val="ID">Choose your option</option>
								@foreach($results[0] as $result => $cropTypeResult)
									<option value='{{$cropTypeResult}}'>{{$cropTypeResult}}</option>
								@endforeach
								</select><label>Crop Type</label>
							</div>

							<div class="input-field col s6">
					          <input id="newCropTxt" type="text" class="validate" name="newcroptype" disabled>
					          <label for="newCropTxt">New Crop Type</label>
					        </div>

					        <h5 class="s12 center">Crop Name</h5>
							<div class="input-field col s12" id="before">
					          <input id="cropName" type="text" class="validate" name="cropName" required>
					          <label for="cropName">Crop Name</label>
					        </div>

					        <h5 class="s12 center">Crop Description</h5>
							<div class="input-field col s12" id="before">
					          <input id="cropName" type="text" class="validate" name="cropDesc" required>
					          <label for="cropName">Crop Description</label>
					        </div>

					        <div class="file-field input-field col s6">
					             <div class="btn">
					               <span>Upload Picture</span>
					               <input type="file" id="fileUpload" name="fileUpload">
					             </div>
					             <div class="file-path-wrapper">
					               <input class="file-path validate" type="text">
					             </div>
					         </div>

					         <div class="col s6">
					         	 <img id="preview" src="#" alt="your image" / width="100" height="100">
					         </div>

					        <div class="col s12">
			        	        <h5 class="col s6 center">Crop Days</h5>
			        	        <h5 class="col s6 center">Crop Price</h5>
			        	    </div>
	        			<div class="input-field col s6" id="before">
	        	          <input id="cropPrice" type="number" step="any" class="validate" name="cropBeforeHarvest" required>
	        	          <label for="cropPrice">Crop days before harvest</label>
	        	        </div>

	        	        
	        			<div class="input-field col s6" id="before">
	        	          <input id="cropPrice" type="number" step="any" class="validate" name="cropPrice" required>
	        	          <label for="cropPrice">Crop Price</label>
	        	        </div>
					     

					        
		                </div>

		                <div class="row">
		                	<h5 class="s12 center">PH</h5>
		                	<div class="input-field col s6">
					          <input id="minPH" type="number" step="any" class="validate" name="minPh" required>
					          <label for="minPH">Minimum PH</label>
					        </div>

					        <div class="input-field col s6">
					          <input id="maxPH" type="number" step="any" class="validate" name="maxPh" required>
					          <label for="maxPH">Maximum PH</label>
					        </div>
		                </div>

		                <div class="row">
		                	<h5 class="s12 center">Sunlight</h5>
		                	<div class="input-field col s6">
					          <input id="minSunlight" type="number" step="any" class="validate" name="minSunlight" required>
					          <label for="minSunlight">Minimum Sunlight</label>
					        </div>

					        <div class="input-field col s6">
					          <input id="maxSunlight" type="number" step="any" class="validate" name="maxSunlight" required>
					          <label for="maxSunlight">Maximum Sunlight</label>
					        </div>
		                </div>

		                <div class="row">
		                	<h5 class="s12 center">Moisture</h5>
		                	<div class="input-field col s6">
					          <input id="minMoisture" type="number" step="any" class="validate" name="minMoisture" required>
					          <label for="minMoisture">Minimum Moisture</label>
					        </div>

					        <div class="input-field col s6">
					          <input id="maxMoisture" type="number" step="any" class="validate" name="maxMoisture" required>
					          <label for="maxMoisture">Maximum Moisture</label>
					        </div>
		                </div>

		                <div class="row">
		                	<h5 class="s12 center">Temperature</h5>
		                	<div class="input-field col s6">
					          <input id="minTemp" type="number" step="any" class="validate" name="minTemp" required>
					          <label for="minTemp">Minimum Temperature</label>
					        </div>

					        <div class="input-field col s6">
					          <input id="maxTemp" type="number" step="any" class="validate" name="maxTemp" required>
					          <label for="maxTemp">Maximum Temperature</label>
					        </div>
		                </div>

		                <div class="row">
		                	<h5 class="s12 center">Planting Distance(sq. meter)</h5>
		                	<div class="input-field col s12">
					          <input id="plantDist" type="number" step="any" class="validate" name="plantDist" required>
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
		                	     <input checked="checked" name="fertgroup" type="radio" id="test3"  onclick="document.getElementById('newFertTxt').disabled = true; 
		                	     															document.getElementById('fertSelect').removeAttribute(disabled);
		                	     															document.getElementById('fertSelect').setAttribute(required);
		                		     														document.getElementById('newFertTxt').removeAttribute(required);"/>
		                	     <label for="test3">Choose Fertilizer type</label>
		                	   </p>
		                	   <p>
		                	     <input name="fertgroup" type="radio" id="test4"  onclick="document.getElementById('fertSelect').disabled = true; 
		                	     															document.getElementById('newFertTxt').disabled = false;
		                	     															document.getElementById('newFertTxt').setAttribute(required);
		                		     														document.getElementById('fertSelect').removeAttribute(required);
		                		     														var x = document.getElementById('fertSelect');
		                		     														x.options[0].selected = true;"/>
		                	     <label for="test4">New Fertilizer type</label>
		                	   </p>
		                	</div>
			             
		                	<h5 class="s12 center">Fertilizer</h5>
		                	<div class="input-field col s6" id="fertSelect">
		                		<select name='fertSelect'>
								<option value='' disabled selected id="defaultSelect">Choose your option</option >
								@foreach($results[1] as $result => $cropFertResult)
									<option value="{{$cropFertResult}}">{{$cropFertResult}}</option>
								@endforeach
								</select><label>Fertilizer</label>
							</div>

							<div class="input-field col s6 right">
					          <input id="newFertTxt" type="text" class="validate" name="newferttype" disabled>
					          <label for="newFertTxt">New Fertilizer Type</label>
					        </div>

		                </div>

		                 <div class="row">
		                	<h5 class="s12 center">Fertilizer Amount</h5>
		                	<div class="input-field col s12">
					          <input id="fertAmt" type="number" step="any" class="validate" name="fertAmts" required>
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

		<script type="text/javascript">
		function chooseCropType(){
			document.getElementById('newCropTxt').disabled = true; 
			document.getElementById('cropSelect').removeAttribute(disabled);
			document.getElementById('cropSelect').setAttribute(required);
			document.getElementById('newCropTxt').removeAttribute(required);
		}

		function newCropType(){
			document.getElementById('cropSelect').disabled = true; 
			document.getElementById('newCropTxt').disabled = false;
			document.getElementById('newCropTxt').setAttribute(required);
			document.getElementById('cropSelect').removeAttribute(required);
			
			var opt = $("option[val=ID]"),
			    html = $("<div>").append(opt.clone()).html();
			html = html.replace(/\>/, ' selected="selected">');
			opt.replaceWith(html);		
		}

		function readURL(input) {

		    if (input.files && input.files[0]) {
		        var reader = new FileReader();

		        reader.onload = function (e) {
		            $('#preview').attr('src', e.target.result);
		        }

		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#fileUpload").change(function(){
		    readURL(this);
		});
		</script>

@endsection