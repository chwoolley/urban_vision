@extends('layouts.app')
@section('content')
 

<div class="content-single"> 
@if (Auth::guest())

<div class="content-wrapper-single">
            <h2 class="display">Login</h2>    
                <div class="form-container">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <span class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                           
                        </span>

                        <span class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                           
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                           
                        </span>

                        <div class="form-group">
                           
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                         
                        </div>

                  
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                        
                    </form>

                    </div>
  </div>



@else


<div class="content-wrapper-single">
<h2 class="display">Edit</h2>
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
<button><a href="../admin">Finished</a></button>
</fieldset>
{!! Form::close() !!}
</div>

</div>

@endif
</div>

<script type="text/javascript">

document.addEventListener("DOMContentLoaded", function(e){
document.querySelector(".upload").onchange = function () {
document.querySelector(".filePath").value = this.value;}

});
</script>


@endsection