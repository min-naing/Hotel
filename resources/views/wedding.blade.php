@extends('layout.master')

@section('title','Wedding')
@section('nav','Wedding & Service')
@section('nav_name','Wedding & Services')
@section('content')

      
    <section id="content">
        <div class="container">
            <div id="main">

            <div class="items-container isotope image-box style9 row">
                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-4 filter-all filter-island filter-beach">
                        
                        <article class="box animated" data-animation-type="fadeInRight">
                                <span class="discount"><span class="discount-text">Reserved</span></span>
                                <figure>
                                    <a href="#"><img src="{{asset('images/hotel/wedding/4.jpg')}}" alt=""></a>
                                    <figcaption>
                                        <span class="price">$483</span>
                                        <h2 class="caption-title">Mini Hall</h2>
                                        <a href="#" class="button btn-medium" data-filter="filter-countries"><h3>Book Now</h3></a>
                                        <h5>We have a hall room that is wide enough to meet your pataner.</h5>
                                         <div class="col-md-6">
                                            <h5><b>Facilities for Mini Room :</b> </h5>

                                        </div>
                                         <div class="col-md-6">
                                            <h5>dd</h5>
                                            <h5>dsf</h5>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                    </figcaption>
                                </figure>
                        </article>
                    </div>

                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-4 filter-all filter-island filter-beach">
                        
                        <article class="box animated" data-animation-type="fadeInRight">
                                <span class="discount"><span class="discount-text">Available</span></span>
                                <figure>
                                    <a href="#"><img src="{{asset('images/hotel/wedding/2.jpg')}}" alt=""></a>
                                    <figcaption>
                                        <span class="price">$518</span>
                                        <h2 class="caption-title">Wedding Hall</h2>
                                        <a href="" class="button btn-medium" data-filter="filter-countries"><h3>Book Now</h3></a>
                                        <h5>We have a hall room that is wide enough to meet your pataner.</h5>
                                        <div class="col-md-6">
                                            <h5><b>Facilities for Wedding Room :</b> </h5>

                                        </div>
                                         <div class="col-md-6">
                                            <h5>dd</h5>
                                            <h5>dsf</h5>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                    </figcaption>
                                </figure>
                        </article>
                    </div>

                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-4 filter-all filter-island filter-beach">
                        
                        <article class="box animated" data-animation-type="fadeInRight">
                                <span class="discount"><span class="discount-text">Available</span></span>
                                <figure>
                                    <a href="#"><img src="{{asset('images/hotel/wedding/1.jpg')}}" alt=""></a>
                                    <figcaption>
                                        <span class="price">$712</span>
                                        <h2 class="caption-title">Main Hall</h2>
                                        <a href="#" class="button btn-medium" data-filter="filter-countries"><h3>Book Now</h3></a>
                                        <h5>We have a hall room that is wide enough to meet your pataner.</h5>
                                        <div class="col-md-6">
                                            <h5><b>Facilities for Main Room:</b> </h5>

                                        </div>
                                         <div class="col-md-6">
                                            <h5>dd</h5>
                                            <h5>dsf</h5>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                    </figcaption>
                                </figure>
                        </article>
                    </div>
            </div>
             <h2 class="box">Services That Are Available In All Halls and Wedding Rooms</h2>
                <p></p>
                <div class="more-popular-destinations">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <ul >
                                <li><h5 class="box-title">Air Conditioning</h5></li>
                                <li><h5 class="box-title">Water Cooler</h5></li>

                            </ul>
                        </div>
                         
                        <div class="col-sm-6 col-md-3">
                            <ul >
                                <li><h5 class="box-title">Chairs</h5></li>
                                <li><h5 class="box-title">Tables</h5></li>
                                

                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <ul >
                                <li><h5 class="box-title">Lighting and Slides</h5></li>
                               
                                <li><h5 class="box-title">Drinks And Snacks</h5></li>

                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <ul >
                                <li><h5 class="box-title">Complementary Bottled Water</h5></li>

                            </ul>
                        </div>
                    </div>
                </div>
        </div>
        </div> 
    </section>


@endsection