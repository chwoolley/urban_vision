@extends('layouts.app')
@section('content')
 

<div class="content-single"> 



<div class="content-wrapper-single">
<div class="card">

@if ( session('upload_fail'))
<p>{!! session('upload_fail') . $errors->first() !!}</p>
@endif

@if ( session('upload_success'))
<p>{!! session('upload_success') !!}</p>
@endif




<section>
<h5>Image preview</h5>
<div class="card-image-preview">
<img src="../assets/tattoos/{{$editTatt->image_path}}">
</div>
</section>
<section>

<h5> Title: {{$editTatt->title}}</h5>
<h5> Description</h5>
<article>
<p>{{$editTatt->description}}</p>

</article>
</section>

</div>


<div class="form-container">
{!! Form::open([ 'url' => route('edited', ['id' => $editTatt->id]), 'method' => 'put', 'files'=>true]) !!}
<fieldset>

{!! Form::label('image_upload', 'click to choose file') !!}
<label class='uploadButton'>Browse..
{!! Form::file('image_upload', array('class'=>'upload'))!!}
</label>
{!! Form::text('upload title', null, array('placeholder'=>$editTatt->image_path, 'disabled'=>'disabled', 'class'=>'filePath')) !!}


{!! Form::label('title', 'Title') !!}
{!! Form::text('title' , $editTatt->title) !!}

{!! Form::label('type', 'Type') !!}
{!! Form::select('type', array('classic' => 'classic','contemporary' => 'contemporary','tribal' => 'tribal' , 'geometric' => 'geometric','stylized' => 'stylized'), null, array('placeholder'=> 'Current type: ' . $editTatt->type)) !!}

{!! Form::label('description', 'Enter a Description') !!}
{!! Form::textarea('description', $editTatt->description ) !!}








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