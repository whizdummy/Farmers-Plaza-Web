@extends('dashboard')
@section('article')
  
	      <div class="row container">   
	      
	      <h2 class="col s12 center green-text text-darken-4">Farm View</h2>
      		
	      </div>

	      <div class="row">
	      	<table class="bordered highlight centered">
	      	        <thead>
	      	          <tr>
	      	              <th data-field="id">Farm Name</th>
	      	              <th data-field="name">Farm Size</th>
	      	              <th data-field="price">Farm Owner</th>
	      	          </tr>
	      	        </thead>

	      	        <tbody>

						@foreach($farms as $farm)
							<tr>
								<td>{{ $farm[0] }}</td>
								<td>{{ $farm[1] }}</td>
								<td>{{ $farm[2] }}</td>
							</tr>	
						@endforeach
	      	        </tbody>
	      	      </table>
	      </div>

@endsection