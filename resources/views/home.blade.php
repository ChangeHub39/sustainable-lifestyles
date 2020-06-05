@extends('layouts.master')

@section('content')

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div id="myCarouselx" class="carousel slide hidden-xs" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarouselx" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselx" data-slide-to="1"></li>
            <li data-target="#myCarouselx" data-slide-to="2"></li>
            <li data-target="#myCarouselx" data-slide-to="3"></li>
            <li data-target="#myCarouselx" data-slide-to="4"></li>
            <li data-target="#myCarouselx" data-slide-to="5"></li>
            <li data-target="#myCarouselx" data-slide-to="6"></li>
            <li data-target="#myCarouselx" data-slide-to="7"></li>

        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide img-responsive" src="{{ asset('img/1.jpeg') }}" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="{{ asset('img/2.jpeg') }}" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="{{ asset('img/3.jpeg') }}" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="fourth-slide" src="{{ asset('img/5.jpeg') }}" alt="Fourth slide">
                <div class="container">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="fifth-slide" src="{{ asset('img/4.jpeg') }}" alt="Fifth slide">
                <div class="container">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="seventh-slide" src="{{ asset('img/6.jpeg') }}" alt="Fifth slide">
                <div class="container">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="eigth-slide" src="{{ asset('img/7.jpeg') }}" alt="Fifth slide">
                <div class="container">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#myCarouselx" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarouselx" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div id="myCarousel" class="carousel slide visible-xs" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>


        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide img-responsive" src="{{ asset('img/1-mobile.jpeg') }}" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="{{ asset('img/2-mobile.jpeg') }}" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="fourth-slide" src="{{ asset('img/6-mobile.jpeg') }}" alt="Fourth slide">
                <div class="container">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="fourth-slide" src="{{ asset('img/5-mobile.jpeg') }}" alt="Fourth slide">
                <div class="container">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="fifth-slide" src="{{ asset('img/4-mobile.jpg') }}" alt="Fifth slide">
                <div class="container">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div id="jumbotext">
        <div class="container">
            <h1>Welcome to the Sustainable Lifestyle Platform</h1>

            <p>We’re creating a New Zealand experiment where we help people make small lifestyle changes to reduce
                their environmental impact. Small changes by a lot of people add up to big changes.</p>
        </div>
    </div>


    <div class="container">
        <div class="padding">

            <p>On the Sustainable Lifestyle Platform we will show you how to reduce your carbon emissions and have a
                positive impact by mapping your lifestyle and making some simple changes. </p>
            <p>We’ll help you along the way with a personalised mix of bespoke plans, email updates and text reminders.
                If you sign up for the 30 day programme you choose how we communicate with you and how often.
            </p>


        </div>

        <h2 class="new center">To help you cut your carbon footprint we will make small tweaks and changes
            across these areas. Every little bit adds up.</h2>
        <br/>

        <div class="row">
            <div class="col-md-4 col-xs-6">
                <img src=" {{ asset('icons/001-front-of-bus.png')  }} " class="img-responsive icons" alt="Slider Image">
{{--                <p class="center"><strong>Personalised timetable</strong><br>Based on your lifestyle and the trips that--}}
{{--                    you make.</p>--}}
            </div>
            <div class="col-md-4 col-xs-6">
                <img src=" {{ asset('icons/002-bike.png')  }} " class="img-responsive icons" alt="Slider Image">
{{--                <p class="center"><strong>Travel planning</strong><br>We will plan out what bus services work for your--}}
{{--                    lifestyle. Online or via phone.</p>--}}
            </div>
            <div class="col-md-4 col-xs-6">
                <img src=" {{ asset('icons/003-man-walking-directions-button.png')  }} " class="img-responsive icons"
                     alt="Slider Image">
{{--                <p class="center"><strong>Reminders</strong><br>Calendar or text reminders about your upcoming bus--}}
{{--                    trips.</p>--}}
            </div>
            <div class="col-md-4 col-xs-6">
                <img src=" {{ asset('icons/004-rubbish-bin.png')  }} " class="img-responsive icons" alt="Slider Image">
{{--                <p class="center"><strong>$40 credit</strong><br>A new Metrocard with $40 credit or a $40 top up to an--}}
{{--                    existing card.</p>--}}
            </div>
            <div class="col-md-4 col-xs-6">
                <img src=" {{ asset('icons/005-triangular-arrows-sign-for-recycle.png')}} " class="img-responsive icons"
                     alt="Slider Image">
{{--                <p class="center"><strong>Fly Buys Points</strong><br>Get FlyBuys Points for signing up to the pilot and--}}
{{--                    for your trips.</p>--}}
            </div>
            <div class="col-md-4 col-xs-6">
                <img src=" {{ asset('icons/006-waste-water.png')  }} " class="img-responsive icons" alt="Slider Image">
{{--                <p class="center"><strong>Fly Buys Points</strong><br>Get FlyBuys Points for signing up to the pilot and--}}
{{--                    for your trips.</p>--}}
            </div>
            <div class="col-md-4 col-xs-6">
                <img src=" {{ asset('icons/007-lightbulb.png')  }} " class="img-responsive icons" alt="Slider Image">
{{--                <p class="center"><strong>Fly Buys Points</strong><br>Get FlyBuys Points for signing up to the pilot and--}}
{{--                    for your trips.</p>--}}
            </div>
            <div class="col-md-4 col-xs-6">
                <img src=" {{ asset('icons/008-airplane.png')  }} " class="img-responsive icons" alt="Slider Image">
{{--                <p class="center"><strong>Fly Buys Points</strong><br>Get FlyBuys Points for signing up to the pilot and--}}
{{--                    for your trips.</p>--}}
            </div>


        </div>

        <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
                <p>
                    <strong>Step 1</strong> Lifestyle mapping
                </p>
                <p>
                    <strong>Step 2</strong> Personalised plan with top 10 actions you can take to reduce your emissions
                </p>
                <p>
                    <strong>Step 3 (Optional)</strong> Sign up for a 30 challenge to see how much carbon emissions you can save
                    with some simple lifestyle changes
                </p>

            </div>
        </div>

        @if(auth()->check())
            <p class="center"><a class="btn btn-primary btn-lg" href="dashboard" role="button">Get Started &raquo;</a></p>
        @else
            <p class="center"><a class="btn btn-primary btn-lg" href="/register" role="button">Get Started &raquo;</a></p>
        @endif

        <!-- Example row of columns -->

@endsection
