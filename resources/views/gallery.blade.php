@extends('layouts.app')

 @section('content')
 <div class="gallery">
@foreach($gallerydata as $data)

{{-- <h5>{{$data->title}}</h5> --}}


<div class="gallery-item"><a href="gallery/{{$data->id}}"><img src="assets/tattoos/{{$data->image_path}}"></a>	</div>
{{-- <p>{{$data->description}}</p> --}}

@endforeach

</div>

@endsection
