@extends('layouts.app')


@section('content')

    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  
            <div class="mb-5 element-animate">
              <h1 class="mb-2">DASHBOARD</h1>
              
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
            <h5 style="text-align:center;">API CREDENTIALS</h5>
            <hr/>
            <p>Email : <span style="color:red;">{{Auth()->user()->email}}</span></p>
             <p>Password : <span style="color:red;">Your Password</span></p>
             
                         <p style="color:red; font-size:0.7em; text-align:center;">NB*</p>
                         <hr/>
                         <p style="color:black; font-size:0.9em; text-align:center;">Kindly use this in your API Authentication Token Generation
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection