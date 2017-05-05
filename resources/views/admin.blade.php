@extends('layouts.app')

 @section('content')
<div class="content-single" >

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
<div class="content-wrapper-admin">

<h1 class="display">Admin</h1>
<a href="upload">Add a new tatoo</a> 
<div class="card-holder">



@foreach($adminData as $data)
<div class="card">

<section>
<h5>Image preview</h5>
<div class="card-image-preview">
<img src="assets/tattoos/{{$data->image_path}}">
</div>
</section>
<section>

<h5> Title: {{$data->title}}</h5>
<h5> Description</h5>
<article>
<p>{{$data->description}}</p>

</article>



<button><a href="admin/{{$data->id}}">Edit</a></button>
<a href="#">Live</a>

</section>

</div>

@endforeach
</div>
</div>

@endif
</div>

@endsection
