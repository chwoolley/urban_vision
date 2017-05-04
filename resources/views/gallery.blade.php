@extends('layouts.app')

 @section('content')

 <section class="content-header">
<h1 class="display">Portfolio</h1>
<p>Here is a selection of the work I have completed recently. As the collection grows I will be updating this section</p>
 </section>
 <div class="gallery">
@foreach($gallerydata as $data)

{{-- <h5>{{$data->title}}</h5> --}}


<div class="gallery-item" style="background-image: url(assets/tattoos/{{$data->image_path}});"><a href="gallery/{{$data->id}}" class="bl-box"><span class="project-title">{{$data->title}}	</span></a></div>
{{-- <p>{{$data->description}}</p> --}}

@endforeach

<div class="gallery-item gallery-end"><a href="contact" class="bl-box"><span class="project-title">Like what you see?<br>Get in touch</a></div>

</div>

@endsection
