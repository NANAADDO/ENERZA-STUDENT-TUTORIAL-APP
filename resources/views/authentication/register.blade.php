@extends('layouts.app')


@section('content')

    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  
            <div class="mb-5 element-animate">
              <h1 class="mb-2">Register</h1>
              <p class="bcrumb"><a href="#">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Register</span></p>
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
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                <h2 class="mb-5">Register new account</h2>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label >Email</label>
  <input type="text"  name="email" value="{{ old('email') }}" class="form-control py-2 {{ $errors->has('email') ? ' has-error' : '' }}">
                     @if ($errors->has('email'))
                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif  
                  </div>
                  <div class="col-md-12 form-group">
                    <label for="name">Full Name</label>
  <input type="text"  name="name" value="{{ old('name') }}" class="form-control py-2 {{ $errors->has('name') ? ' has-error' : '' }}">
                     @if ($errors->has('name'))
                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif  
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-12 form-group">
                    <label for="name">Password</label>
                    <input type="password" name="password" class="form-control py-2 {{ $errors->has('password') ? ' has-error' : '' }}">
                     @if ($errors->has('password'))
                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                  </div>
                </div>
                 <div class="row mb-5">
                  <div class="col-md-12 form-group">
                    <label for="name">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control py-2">
                    
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="submit" value="Register" class="btn btn-primary px-5 py-2">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection