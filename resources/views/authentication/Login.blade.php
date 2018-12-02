@extends('layouts.app')


@section('content')

    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  
            <div class="mb-5 element-animate">
              <h1 class="mb-2">Log in</h1>
              <p class="bcrumb"><a href="#">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Log in</span></p>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="site-section" style="margin-top:-220px;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="form-wrap">
            <form class="form-horizontal" role="form" method="POST"  name="postLoginCredentials">
                        {!! csrf_field() !!}

              <h2 class="mb-4">Log in with your account</h2>
                <div class="row">
                    <p class="error" style="display:none;">OOps!! Invalid Credentials</p>
                  <div class="col-md-12 form-group">
                    <label for="name">Email</label>
  <input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control py-2 {{ $errors->has('email') ? ' has-error' : '' }}">
                     @if ($errors->has('email'))
                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif  
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-12 form-group">
                    <label for="name">Password</label>
                    <input type="password"  name="password" class="form-control py-2 {{ $errors->has('password') ? ' has-error' : '' }}">
                     @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="button" value="Login" class="btn btn-primary px-5 py-2" id="Login">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection