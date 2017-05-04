@extends('layouts.app')

 @section('content')
 
<div class="content-single">

<div class="content-wrapper-single">
<a href="../gallery">Back to Gallery</a>
	<h2 class="display">{{$singleTatt->title}}</h2>
<img src="../assets/tattoos/{{$singleTatt->image_path}}">	
<p>{{$singleTatt->description}}</p>
</div>
</div>
 @endsection