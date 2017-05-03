@extends('layouts.app')

@section('content')
    <h1>Welcome to Urban Vision</h1>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quam recusandae sed id totam. Expedita nostrum illo veniam error, quae ut repellendus aut ullam reiciendis consectetur, autem quo, quisquam, sapiente.
            </p>
@endsection

@section('latest')

<section class="latest-work">


	@foreach($latestData as $data)
<div class="gallery">
	<a href="gallery/{{$data->id}}"><img src="assets/tattoos/{{$data->image_path}}" /></a>
</div>
	@endforeach


</section>

@endsection