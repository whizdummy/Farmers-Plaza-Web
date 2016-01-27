@extends('parent')
@section('mainBody')
	foreach($crop as $outz){
		echo '<p>';
		var_dump($outz);
		echo '</p>';
	}
@stop