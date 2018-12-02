@extends('layouts.app')


@section('content')

    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5"
             style="background-image: url(images/big_image_2.jpg);">
        <div class="container">
            <div class="row align-items-center justify-content-center site-hero-sm-inner">
                <div class="col-md-7 text-center">

                    <div class="mb-5 element-animate">
                        <h1 class="mb-2">{{$data[0]->course->course_name}}</h1>
                        <p class="bcrumb"><a href="index.html">Course</a> <span class="sep ion-android-arrow-dropright px-2">

                            </span>  <span class="current">Subject</span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <div class="site-section bg-light">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-lg-8 order-md-2">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <h3 class="heading text-primary" style="text-align: center" id="tut_header">Subject Materials Reading</h3>
                            <p  id="display_content" ></p>
                           <p style="text-align: center;display: none;" id="testobj" class="">
                               <button type="button" class="btn-lg btn-success take_quiz" >Take Multiple Objectives Question Test</button>
                           </p>
                            <p id="obje_id" style="display: none;"></p>
                            <section class="hide_course_page">
                            <h2>Welcome to Eneza Online Tutorials Courses </h2>


                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A quibusdam nisi eos accusantium eligendi velit deleniti nihil ad deserunt rerum incidunt nulla nemo eius molestiae architecto beatae asperiores doloribus animi.</p>

                                <h6 style="text-align: center">Tutorials Instructions</h6>
                            <hr/>
                            <figure>

                                <iframe src="https://www.youtube.com/watch?v=hSPq3DkbS-o" width="100%" height="500px;"></iframe>

                            </figure>
                            </section>

                               <section id="Objectives">

                               </section>


                        </div>








                    </div>

                    <div class="row mb-5">
                        <div class="col-md-12 text-center">

                        </div>
                    </div>
                </div>
                <!-- END content -->
                <div class="col-md-6 col-lg-4 order-md-1">
                    <h3 class="heading" style="text-align: center">{{$data[0]->course->course_name}} Subject</h3>

                    {!! csrf_field() !!}
                    @foreach($data as $sub)
                    <div class="block-24 mb-5">

                        <div class="block-19">
                            <figure>
                                <a href="#"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                            </figure>
                            <div class="text">
                                <h2 class="heading"><a href="#" id="sub_{{$sub->id}}">{{$sub->subject_name}}</a></h2>
                                <p class="mb-4">This is a subject that teaches you the fundamentals of {{$sub->subject_name}}
                                    and provides you multiple choice question to test what you have learnt .</p>

                                    <div><button type="button" class="btn btn-md btn-info btn-block take_subject" id="{{$sub->id}}"
                                        >Read {{$sub->subject_name}} tutorials</button></div>

                            </div>
                        </div>
                    </div>
                        @endforeach


            </div>
        </div>
    </div>


        <!---------------------PARK & RIDE DETAILS START HERE---------------------------------------->
        <div  id="loader_page"  style="position: fixed; width: 100%; height: 100%; left:0; top:0; background:
        none repeat scroll 0 0 #1d2124; z-index: 999998;  display: none;">


                <!-- Modal content-->
                <div style="background: white; line-height: 70px; width: 400px; margin: auto; border-radius:10px; margin-top: 200px; ">
                    <p style="text-align: center;color: red;"><img src="{{asset('/images/loader.gif')}}">Loading ..</p>
                </div>



                <!-- data 2  -->


        </div>
        <!---------------------PARK & RIDE MODAL DETAILS END HERE---------------------------------------->

@endsection