@extends('dashboard')
@section('article')
  
	      <div class="row container">   
	      
	      <h2 class="col s12 center green-text text-darken-4">Crops View</h2>
      		
	      </div>

	      <div class="row">
	      	<table class="bordered highlight centered">
	      	        <thead>
	      	          <tr>
	      	              <th data-field="name">Crop Name</th>
	      	              <th data-field="price">Crop Price</th>
	      	              <th data-field="daysBeforeHarvest">Days Before Harvest</th>
	      	          </tr>
	      	        </thead>
					
	      	        <tbody>
						@foreach($crops as $crop)
							<tr>
								<td>{{ $crop[0] }}</td>
								<td>{{ $crop[2] }}</td>
								<td>{{ $crop[3] }}</td>
							</tr>	
						@endforeach
	      	          
	      	        </tbody>
	      	      </table>
	      </div>

@endsection