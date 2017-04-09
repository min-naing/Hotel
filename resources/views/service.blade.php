@extends('layout.master')
@section('title','Service')
@section('nav','Service')
@section('nav_name','Service')
@section('content')


    <section id="content" class="no-padding">
        <div class="banner imagebg-container" style="height: 350px; background-image: url(http://placehold.it/2080x350);">
            <div class="container">
                <h1 class="big-caption">Best Holiday Suggestions for <em>you!</em></h1>
                <h2 class="med-caption yellow-color"><strong>2,000</strong> destinations in <strong>120</strong> countries.</h2>
            </div>
        </div>
        <div class="tab-wrapper">
            <div class="tab-container container trans-style">
                <ul class="tabs no-padding">
                    <li><a data-toggle="tab" href="#family1"><i class="soap-icon-family"></i>Family</a></li>
                    <li class="active"><a data-toggle="tab" href="#honeymoon1"><i class="soap-icon-couples"></i>Honeymoon</a></li>
                    <li><a data-toggle="tab" href="#weekends1"><i class="soap-icon-availability"></i>Weekends</a></li>
                    <li><a data-toggle="tab" href="#friends1"><i class="soap-icon-friends"></i>Friends</a></li>
                </ul>
                <div class="tab-content">
                    <div id="family1" class="tab-pane fade">
                        <div class="md-section">
                            <h2 class="skin-color">Family</h2>
                        </div>
                    </div>
                    <div id="honeymoon1" class="tab-pane fade in active image-style style2">
                        <div class="row">
                            <div class="col-md-6 md-section">
                                <h2 class="skin-color">Honeymoon Suggestions</h2>
                                <p style="font-size: 1.3333em;">Duis condimentum ante hendrerit, sagittis sapien vitae, elementum libero. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec massa urna, interdum sed nunc eu, pretium fermentum velit. Donec sodales.</p>
                            </div>
                            <div class="col-md-6 col-lg-5 pull-right">
                                <ul style="" class="image-block clearfix">
                                    <li style="z-index: 5; left: 50px; top; 10px;">
                                        <a style="width: 80px; height: 80px; position: relative;" class="middle-block" href="#">
                                            <img width="133" height="88" alt="" src="http://placehold.it/133x88" class="middle-item" style="position: absolute; top: 50%; margin-top: -40px; left: 50%; margin-left: -66.5px;">
                                        </a>
                                    </li>
                                    <li style="z-index: 4; left: 180px; top: 100px;">
                                        <a style="width: 100px; height: 100px; position: relative;" class="middle-block" href="#">
                                            <img width="150" height="100" alt="" src="http://placehold.it/150x100" class="middle-item" style="position: absolute; top: 50%; margin-top: -50px; left: 50%; margin-left: -75px;">
                                        </a>
                                    </li>
                                    <li style="z-index: 3; left: 250px; top: 20px;">
                                        <a style="width: 150px; height: 150px; position: relative;" class="middle-block" href="#">
                                            <img width="220" height="196" alt="" src="http://placehold.it/220x196" class="middle-item" style="position: absolute; top: 50%; margin-top: -75px; left: 50%; margin-left: -110px;">
                                        </a>
                                    </li>
                                    <li style="z-index: 2; left: 100px; top: 0;">
                                        <a style="width: 160px; height: 160px; position: relative;" class="middle-block" href="#">
                                            <img width="312" height="208" alt="" src="http://placehold.it/312x208" class="middle-item" style="position: absolute; top: 50%; margin-top: -80px; left: 50%; margin-left: -156px;">
                                        </a>
                                    </li>
                                    <li style="z-index: 1; left: 0; top: 30px;">
                                        <a style="width: 156px; height: 156px; position: relative;" class="middle-block" href="#">
                                            <img width="235" height="156" alt="" src="http://placehold.it/235x156" class="middle-item" style="position: absolute; top: 50%; margin-top: -78px; left: 50%; margin-left: -117.5px;">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="weekends1" class="tab-pane fade">
                        <div class="md-section">
                            <h2 class="skin-color">Weekends</h2>
                        </div>
                    </div>
                    <div id="friends1" class="tab-pane fade">
                        <div class="md-section">
                            <h2 class="skin-color">Friends</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="main" class="md-section">
                <h2 class="no-margin">Services & Facilities For You</h2>
                <p></p>
                <div class="row image-box style1 add-clearfix">

                    <div class="col-sm-6 col-md-3">
                        <article class="box">
                            <figure>
                                <a class="hover-effect" title="" href="{{url('/wedding')}}"><img width="270" height="160" alt="" src="{{asset('images/service/wedding.jpg')}}"></a>
                            </figure>
                            <div class="details">
                                <h3 class="box-title"><a href="{{url('/wedding')}}">Hall & Wedding Services</a></h3><br><h5>We have a hall room that is wide enough to hold a Wedding party.</h5>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <article class="box">
                            <figure>
                                <a class="hover-effect" title="" href="{{url('/laundry')}}"><img width="270" height="160" alt="" src="{{asset('images/service/cleaning.jpg')}}"></a>
                            </figure>
                            <div class="details">
                                <h3 class="box-title">Cleaning Services</h3><br><h5> Shoeshinning Service <br>Ironing Service<br>Laundry

                                </h5>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <article class="box">
                            <figure>
                                <a class="hover-effect" title="" href="{{url('/luxury')}}"><img width="270" height="160" alt="" src="{{asset('images/service/swimming.jpg')}}"></a>
                            </figure>
                            <div class="details">
                                <h3 class="box-title">Luxury </h3><br><h5>Swimming Pool
                                    <br>Bar
                                    <br>
                                    Spa & Fitness Center

                                </h5>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <article class="box">
                            <figure>
                                <a class="hover-effect" title="" href="#"><img width="270" height="160" alt="" src="{{asset('images/service/download.jpg')}}"></a>
                            </figure>
                            <div class="details">
                                <h3 class="box-title">Cuisine & Beverages</h3><br><h5>Myanmar Food
                                    <br>
                                    European Food & Drink
                                    <br>
                                    Chinese Food & Drink

                                </h5>
                            </div>
                        </article>
                    </div>

                </div>
                <h2 class="box">Services That Are Available In All Rooms</h2>
                <p></p>
                <div class="more-popular-destinations">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <ul >
                                <li><h5 class="box-title">Internet/Free Wifi</h5></li>
                                <li><h5 class="box-title">Air Conditioning</h5></li>
                                <li><h5 class="box-title">Mirror</h5></li>
                                <li><h5 class="box-title">Water Cooler</h5></li>

                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <ul >
                                <li><h5 class="box-title">Car Parking</h5></li>
                                <li><h5 class="box-title">Garden</h5></li>
                                <li><h5 class="box-title">Wake up service</h5></li>
                                <li><h5 class="box-title"> Fire Detectors</h5></li>

                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <ul >
                                <li><h5 class="box-title">ATM Machine</h5></li>
                                <li><h5 class="box-title">Money Changer</h5></li>
                                <li><h5 class="box-title">TV</h5></li>
                                <li><h5 class="box-title">Complementary Bottled Water</h5></li>
                                <li><h5 class="box-title">Satellite</h5></li>

                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <ul >
                                <li><h5 class="box-title">Telephone</h5></li>
                                <li><h5 class="box-title">Towels</h5></li>
                                <li><h5 class="box-title">Drinks And Snacks</h5></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

