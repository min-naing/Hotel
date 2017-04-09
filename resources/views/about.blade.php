@extends('layout.master')

@section('title','About Us')
@section('nav','About Us')
@section('nav_name','About Us')

@section('content')


    <section id="content">
        <div class="container">
            <div id="main">
                <div class="large-block">
                    <div class="travelo-box">
                        <div class="overflow-hidden">

                            <h1>OUR COMPANY HISTORY</h1>
                            <p style="font-size: 18px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apple was founded by Steve Jobs, Steve Wozniak, and Ronald Wayne in April 1976 to develop and sell personal computers. It was incorporated as Apple Computer, Inc. in January 1977, and was renamed as Apple Inc. in January 2007 to reflect its shifted focus toward consumer electronics.</p>

                        </div>
                    </div>
                </div>
                <div class="large-block">
                    <h1>Meet Our Team</h1>
                    <div class="row image-box style4">


                        <div class="col-sm-3">
                            <article class="box">
                                <figure>
                                    <a class="hover-effect" href="#" title=""><img src="{{asset('images/about/CEO.jpg')}}" alt="" width="370" height="172" /></a>
                                </figure>
                                <div class="details">
                                    <div  style="text-align: center;font-size: 20px;font-weight: bold">Our CEO</div><br>
                                    <div style="text-align: center;font-size: 15px;">Garry Finn</div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-3">
                            <article class="box">
                                <figure>
                                    <a class="hover-effect" href="#" title=""><img src="{{asset('images/about/CFO.jpg')}}" alt="" width="370" height="172" /></a>
                                </figure>
                                <div class="details">
                                    <div  style="text-align: center;font-size: 20px;font-weight: bold">Our CFO</div><br>
                                    <div style="text-align: center;font-size: 15px;">Larry Smith</div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-3">
                            <article class="box">
                                <figure>
                                    <a class="hover-effect" href="#" title=""><img src="{{asset('images/about/GENERAL%20MANAGER.jpg')}}" alt="" width="370" height="172" /></a>
                                </figure>
                                <div class="details">
                                    <div  style="text-align: center;font-size: 20px;font-weight: bold">General Manager</div><br>
                                    <div style="text-align: center;font-size: 15px;">Thomas Wayne</div>
                                </div>
                            </article>
                        </div>

                        <div class="col-sm-3">
                            <article class="box">
                                <figure>
                                    <a class="hover-effect" href="#" title=""><img src="{{asset('images/about/CEO.jpg')}}" alt="" width="370" height="172" /></a>
                                </figure>
                                <div class="details">
                                    <div  style="text-align: center;font-size: 20px;font-weight: bold">Manager</div><br>
                                    <div style="text-align: center;font-size: 15px;">Tim Stein</div>
                                </div>
                            </article>
                        </div>

                    </div>
                </div>


            </div>
        </div>
        <div class="section global-map-area parallax" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="height: 270px;"></div>



                </div>
            </div>
    </section>
    @endsection