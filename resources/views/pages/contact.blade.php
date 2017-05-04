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
	{!! Form::text('name', null, array('placeholder'=>'Your name here'))!!}
	{!! Form::label('email', 'Email:') !!}
	{!! Form::text('email', null,  array('placeholder'=>'Your email address')) !!}
		{!! Form::label('phone', 'Phone:') !!}
	{!! Form::text('phone', null, array('placeholder' =>'123456')) !!}
		{!! Form::label('message', 'Your message') !!}
	{!! Form::textarea('message', null, array('placeholder'=>'Your message here')) !!}
</fieldset>

{!! Form::button('SUBMIT', array('class'=>'button', 'id'=>'button')) !!}

	{!! Form::close() !!}

</div>

</section>

<section class="map">

<div class="map-container">
<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD_agI97O5UrtC5UfQPvrzMZIlQLNesdG0&q=Urban+Vision+Design, Selangor+Malaysia" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>

</section>
</div>
@endsection