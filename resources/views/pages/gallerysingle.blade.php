@extends('layouts.app')

 @section('content')
 

	<h5>{{$singleTatt->title}}</h5>
<img src="../assets/tattoos/{{$singleTatt->image_path}}">	
<p>{{$singleTatt->description}}</p>


 @endsection