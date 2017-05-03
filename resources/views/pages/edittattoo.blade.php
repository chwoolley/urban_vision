@extends('layouts.app')
@section('content')
 
<div>
@if ( session('upload_fail'))
<p>{!! session('upload_fail') . $errors->first() !!}</p>
@endif

@if ( session('upload_success'))
<p>{!! session('upload_success') !!}</p>
@endif


</div>




	<h5>{{$editTatt->title}}</h5>
<img src="../assets/tattoos/{{$editTatt->image_path}}">	
<p>{{$editaTtt->description}}</p>



{!! Form::open([ 'url' => route('edited', ['id' => $editTatt->id]), 'method' => 'put', 'files'=>true]) !!}
<fieldset>
<div>
{!! Form::label('image_upload', 'click to choose file') !!}
{!! Form::file('image_upload') !!}



{!! Form::label('title', 'Title') !!}
{!! Form::text('title' , $editTatt->title) !!}

{!! Form::label('description', 'Enter a Description') !!}
{!! Form::text('description', $editTatt->description) !!}



{!! Form::label('type', 'Type') !!}
{!! Form::select('type', array('classic' => 'classic','contemporary' => 'contemporary','tribal' => 'tribal' , 'geometric' => 'geometric','stylized' => 'stylized'), 'classic') !!}

</div>
</fieldset>
<fieldset>
{!! Form::submit('Submit') !!}

</fieldset>
{!! Form::close() !!}

@endsection