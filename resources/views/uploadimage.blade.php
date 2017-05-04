@extends('layouts.app')
 
@section('content')



<div class="content-single">

<div success messages>
@if ( session('upload_fail'))
<p>{!! session('upload_fail') . $errors->first() !!}</p>
@endif

@if ( session('upload_success'))
<p>{!! session('upload_success') !!}</p>
@endif


</div>

<div class="content-wrapper-single">
<div class="form-container">

<form method="POST" action="/upload/file" accept-charset="UTF-8" enctype="multipart/form-data">
{!! Form::open(['url' => route('uploaded'), 'files'=>true]) !!}
<fieldset>

{!! Form::label('image_upload', 'click to choose file') !!}
<label class='uploadButton'>Browse..
{!! Form::file('image_upload', array('class'=>'upload'))!!}
</label>
{!! Form::text('upload title', null, array('placeholder'=>'0 files selected', 'disabled'=>'disabled', 'class'=>'filePath')) !!}

{!! Form::label('title', 'Title') !!}
{!! Form::text('title', null, array('placeholder'=>'Title')) !!}

{!! Form::label('type', 'Type') !!}
{!! Form::select('type', array('classic' => 'classic','contemporary' => 'contemporary','tribal' => 'tribal' , 'geometric' => 'geometric','stylized' => 'stylized'), null, array('placeholder'=> 'Select Type')) !!}

{!! Form::label('description', 'Enter a Description') !!}
{!! Form::textarea('description', null, array('placeholder'=>'Give your piece a description')) !!}







{!! Form::submit('Submit', array('class'=>'submit')) !!}
{!! Form::reset('Reset', array('class'=>'reset')) !!}
</fieldset>
{!! Form::close() !!}
</div>
</div>
</div>
   
<script type="text/javascript">

document.addEventListener("DOMContentLoaded", function(e){
document.querySelector(".upload").onchange = function () {
document.querySelector(".filePath").value = this.value;}

});
</script>

@endsection