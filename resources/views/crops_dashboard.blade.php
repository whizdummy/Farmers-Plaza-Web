@extends('dashboard')
@section('article')
  
	      <div class="row container">   
	      
	      <h2 class="col s12 center green-text text-darken-4">Crops View</h2>
      		
	      </div>

	      <div class="row">
	      	<table class="bordered highlight centered">
	      	        <thead>
	      	          <tr>
	      	              <th data-field="id">Name</th>
	      	              <th data-field="name">Item Name</th>
	      	              <th data-field="price">Item Price</th>
	      	          </tr>
	      	        </thead>

	      	        <tbody>
	      	          <tr>
	      	            <td>Alvin</td>
	      	            <td>Eclair</td>
	      	            <td>$0.87</td>
	      	          </tr>
	      	          <tr>
	      	            <td>Alan</td>
	      	            <td>Jellybean</td>
	      	            <td>$3.76</td>
	      	          </tr>
	      	          <tr>
	      	            <td>Jonathan</td>
	      	            <td>Lollipop</td>
	      	            <td>$7.00</td>
	      	          </tr>
	      	        </tbody>
	      	      </table>
	      </div>

@endsection