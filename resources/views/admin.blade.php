@extends('layouts.app')

 @section('content')
 
<a href="upload">Add a new tatoo</a> 
<div class="card-holder">



@foreach($adminData as $data)
<div class="card">

<section>
<h5>Image preview</h5>
<div class="card-image-preview">
<img src="assets/tattoos/{{$data->image_path}}">
</div>
</section>
<section>

<h5> Title: {{$data->title}}</h5>

<h5> Description</h5>
<p>{{$data->description}}</p>





<a href="admin/{{$data->id}}">Edit</a>
<a href="admin/{{$data->id}}">Live</a>

</section>

</div>

@endforeach

</div>


@endsection
