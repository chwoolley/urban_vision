@extends('layouts.app')

 @section('content')
<div class="content-single" >
<div class="content-wrapper-admin">
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
<article>
<p>{{$data->description}}</p>

</article>



<button><a href="admin/{{$data->id}}">Edit</a></button>
<a href="#">Live</a>

</section>

</div>

@endforeach
</div>
</div>
</div>

@endsection
