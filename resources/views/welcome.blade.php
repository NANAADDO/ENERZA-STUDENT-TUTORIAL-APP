@extends('layouts.app')


@section('content')

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
        <div class="container">
            <div class="row align-items-center justify-content-center site-hero-inner">
                <div class="col-md-10">

                    <div class="mb-5 element-animate">
                        <div class="block-17">
                            <h2 class="heading text-center mb-4">Find Oneline Courses That Suits You</h2>
                            <form action="{{url('/DisplaySubject')}}" method="post" class="d-block d-lg-flex mb-4" name="select_course_">
                                {!! csrf_field() !!}
                                <div class="fields d-block d-lg-flex">
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="course_id" id="" class="form-control" required>

                                            @foreach($data as $course)
                                            <option value="{{$course->id}}">{{$course->course_name}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control" required>
                                            <option value="">Difficulty</option>
                                            <option value="">Beginner</option>
                                            <option value="">Intermediate</option>
                                            <option value="">Advance</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="submit" class="search-submit btn btn-primary" value="Search" id="searchcourse_">
                            </form>
                            <p class="text-center mb-5">We have more than 500 courses to improve your skills</p>
                            <!--<p class="text-center"><a href="{{url('/register')}}" class="btn py-3 px-5">Register Now</a></p>!-->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END section -->





@endsection