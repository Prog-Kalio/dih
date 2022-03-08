@extends('layouts.app')

<style>
    .flip-card {
        background-color: transparent;
        width: 300px;
        height: 300px;
        perspective: 1000px;
        }

        .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }

        .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
        }

        .flip-card-front, .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        border-radius:10%
        }

        .flip-card-front {
        background-color: #bbb;
        color: black;
        }

        .flip-card-back {
        background-color: rgb(205,205,205);
        color:rgb(33,81,35);
        font-weight: bold;
        transform: rotateY(180deg);
        }
</style>

@section('content')
<div class="container-fluid" style="background-color:midnightblue; min-height: 80vh; border-bottom-left-radius: 35%; border-bottom-right-radius: 3%; border-top-style:ridge">
    <div class="row py-3">
        <div class="col-md-5 col-sm-12"> 
            <div style="text-align: center" class="p-4"><img src="/images/logo.png" style="width:10rem; height:10rem"></div>
            <div style="text-align: center" class="p-2">
                <h3 style="color:white">Developers Incubation Hub</h3>
                <p style="color:lightgray"><i>...where great software developers are incubated till maturity</i></p>
            </div>
            <div style="text-align: center" class="p-1">
                <p><a href="{{ url('/contact') }}" style="background-color:gray; color:rgb(33,81,35); text-decoration:none; font-weight:bold" class="p-3">Contact Us</a></p>
            </div>
        </div>

        <div class="col-md-7 col-sm-12">
            <div style="text-align: center" class="p-3">
                <video width="100%" height="92%" class="img-fluid" controls autoplay muted loop>
                <source src="/images/banner.mp4" type="video/mp4" >
                This browser does not support the video tag
                </video>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid py-5">
    <div class="row d-flex py-4 px-2" style="text-align:center; justify-content:space-evenly">
        <div class="col-md-3 card-box-white m-2 py-3" style="height:8rem; width:8rem;background-color:rgb(205,205,205); border-top-right-radius: 18%; border-bottom-left-radius: 8%">
            <a href="{{ url('/age') }}" target="_self"><i class="fa fa-child py-2" style="font-size:35px"></i></a>
            <a href="{{ url('/age') }}" target="_self" style="text-decoration: none; color:rgb(0,0,0)"><h4>Age</h4></a>
        </div>
        <div class="col-md-3 boxes m-2 py-3" style="height:8rem; width:8rem; background-color: rgb(205,205,205); border-top-right-radius: 18%; border-bottom-left-radius: 8%">
            <a href="{{ url('/calendar') }}" target="_self"><i class="fa fa-calendar py-2" style="font-size:35px"></i></a>
            <a href="{{ url('/calendar') }}" target="_self" style="text-decoration: none; color:rgb(0,0,0)"><h4>Calendar</h4></a>
        </div>
        <div class="col-md-3 boxes m-2 py-3" style="height:8rem; width:8rem; background-color: rgb(205,205,205); border-top-right-radius: 18%; border-bottom-left-radius: 8%">
            <a href="{{ url('/pricing') }}" target="_self"><i class="fa fa-credit-card py-2" style="font-size:35px"></i></a>
            <a href="{{ url('/pricing') }}" target="_self" style="text-decoration: none; color:rgb(0,0,0)"><h4>Pricing</h4></a>
        </div>
        <div class="col-md-3 boxes m-2 py-3" style="height:8rem; width:8rem; background-color: rgb(205,205,205); border-top-right-radius: 18%; border-bottom-left-radius: 8%">
            <a href="{{ url('/sponsors') }}" target="_self"><i class="fa fa-hand-holding-heart py-2" style="font-size:35px"></i></a>
            <a href="{{ url('/sponsors') }}" target="_self" style="text-decoration: none; color:rgb(0,0,0)"><h4>Sponsors</h4></a>
        </div>
    </div>
</div>

<div class="container py-5" style="border-top: 1px solid midnightblue">
    <div class="row d-flex mt-5 mb-5">
        <div class="col-md-5">
            <div>
                <h3 class="p-2" style="background-color:rgba(33,81,35,0.1); box-shadow: 5px 8px 10px rgba(0,0,0,0.1); border-radius:10%; text-align:center; font-weight:bold">
                ABOUT US
                </h3>
        
                <p class="p-1" style="font-size:18px"><span style="font-size:35px"><b>D</b></span>evelopers Incubation Hub DIH is a privately owned training school in Nigeria for teenagers who want to pursue a career in software developement.<br>
                As the name implies, our hub incubates great software developers till they are prepared enough to handle real life projects with little or no supervision. We are mainly focused on Application Software development. It's a two (2) years program aimed at inculcating the necessary Frontend and Backend development tools in teenagers between Thirteen (13) to Nineteen(19) years.</p>
                <p style="font-size:18px">If you would like to know more, <a href="{{ url('/about') }}" target="_self" style="color:rgb(33,81,35)"><i><b>click here!</b></i></a></p>
            </div>
        </div>
        <div class="col-md-7 mt-5 d-lg-flex d-md-flex d-sm-flex justify-content-around" style="align-items:center">
            <div class="col-md-6">
                <div style="height:400px; text-align:center">
					<h5 style="color:gray">Fullstack Development @ Hub</h5>
					<a href="{{ url('/program') }}"><img src="/images/programs1.jpg" alt="Programs 1" width="300px" height="300px"></a>
					<p>To participate at our facility training, visit <a href="{{ url('/program') }}" target="_self" style="color:rgb(33,81,35)"><i><b>here.</b></i></a></p>
				</div>
            </div>
            <div class="col-md-6">
                <div style="height:400px; text-align:center">
					<h5 style="color:gray">Virtual Incubation</h5>
					<a href="{{ url('/program') }}"><img src="/images/programs2.jpg" alt="Programs 2" width="300px" height="300px"></a>
					<p>To cater for those outside Lagos, <a href="{{ url('/program') }}" target="_self" style="color:rgb(33,81,35)"><i><b>this link.</b></i></a></p>
				</div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid p-5" style="background-color:midnightblue; border-top-right-radius: 38%; border-top-left-radius: 3%; border-bottom-style:ridge">
<h3 class="p-5" style="text-align:center; color: white; text-decoration: underline">TESTIMONIALS</h3>    
<div class="row d-md-flex justify-content-around">
        <div class="col-md-4">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="/images/testimonial1.jpg" alt="Avatar" style="width:300px;height:300px; border-radius:10%">
                    </div>

                    <div class="flip-card-back p-5">
                        <h1>Debby</h1> 
                        <p>(16 years)</p> 
                        <p><i>Through the knowledge acquired from DIH, I was able to build web applications without help</i></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="/images/testimonial2.jpg" alt="Avatar" style="width:300px;height:300px; border-radius:10%">
                    </div>

                    <div class="flip-card-back p-5">
                        <h1>Daniel</h1> 
                        <p>(17 years)</p> 
                        <p><i>I'm currently using the knowledge acquired from DIH to study Computer Science</i></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="/images/testimonial3.jpg" alt="Avatar" style="width:300px;height:300px; border-radius:10%">
                    </div>

                    <div class="flip-card-back p-5">
                        <h1>Vanessa</h1> 
                        <p>(15 years)</p> 
                        <p><i>Thanks to DIH, I now build Applications for friends at school</i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection