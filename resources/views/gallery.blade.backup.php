@extends('layouts.app')

 @section('content')

 <section class="content-header">
<h1>Portfolio</h1>
<p>Here is a selection of the work I have completed recently. As the collection grows I will be updating this section</p>
 </section>
 <div class="gallery">
@foreach($gallerydata as $data)

{{-- <h5>{{$data->title}}</h5> --}}


<div class="gallery-item"><a href="gallery/{{$data->id}}"><img src="assets/tattoos/{{$data->image_path}}"></a>	</div>
{{-- <p>{{$data->description}}</p> --}}

@endforeach

</div>

@endsection
