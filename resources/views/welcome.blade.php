@extends('layouts.app')

@section('content')

<div>
<section>
    <h1 class="display">Welcome to Urban Vision</h1>
            <hr>
            <p>We are a tattoo and visual expertise studio 
            focused on tattooing, custom design, creative design 
            and illustration. For us, there is no difference 
            between a big or small tattoo. Our focus is simple. 
            We are here to help you craft the most compelling
             and engaging tattoo to bring your ideas to life.
            </p>

 </section>
 
<section>
<div class="panel">
<div>
<p>If you are after your next tattoo</p>
<button><a href="contact">Contact Us now</a></button>
</div>
</div>

</section>
</div>

<hr>

<section class="latest-work">
			<section class="content-header">
					<h2 class="display">latest work</h2>

			</section>

			<div class="latest-work-gallery">
						@foreach($latestData as $data)
								<div class="latest">
									<a href="gallery/{{$data->id}}">
										<img src="assets/tattoos/{{$data->image_path}}" alt="Images of latest tattoos"/>
									</a>
								</div>
						@endforeach

			</div>

</section>

@endsection