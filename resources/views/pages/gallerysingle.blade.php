@extends('layouts.app')

 @section('content')
 
<div class="content-single">

<div class="content-wrapper-single">
<a href="../gallery">Back to Gallery</a>
	<h5>{{$singleTatt->title}}</h5>
<img src="../assets/tattoos/{{$singleTatt->image_path}}">	
<p>{{$singleTatt->description}}</p>
</div>
</div>
 @endsection