@extends('layouts.app')

@section('content')

<div class="content-container">

<section>
<h1>Contact </h1>

<div class="form-container">
	{!! Form::open ()!!}
	<h3>Drop us a message</h3>
<fieldset>
	{!! Form::label('name', 'Name:') !!}
	{!! Form::text('name', 'Your name here') !!}
	{!! Form::label('email', 'Email:') !!}
	{!! Form::text('email', 'if you need to stay threexample@example.com') !!}
		{!! Form::label('phone', 'Phone:') !!}
	{!! Form::text('phone', '123456') !!}
		{!! Form::label('message', 'Your message') !!}
	{!! Form::textarea('message', 'Your message here') !!}
</fieldset>

{!! Form::button('Contact Us!', array('class'=>'button', 'id'=>'button')) !!}

	{!! Form::close() !!}

</div>
<ul><li>Phone:</li>
<li>Email:</li>
<li>Whats App:</li>
</ul>
</section>

<section class="map">

<div class="map-container">
<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD_agI97O5UrtC5UfQPvrzMZIlQLNesdG0&q=Urban+Vision+Design, Selangor+Malaysia" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>

</section>
</div>
@endsection