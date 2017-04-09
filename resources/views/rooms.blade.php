@extends('layout.master')

@section('title','Rooms')
@section('nav','Rooms')
@section('nav_name','Rooms')

@section('content')

    <section id="content">
        <div class="container">
            <div id="main">

                <div class="items-container isotope image-box style9 row">
                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-3 filter-all filter-island filter-beach">

                        <article class="box animated" data-animation-type="fadeInRight">
                            <span class="discount"><span class="discount-text">Reserved</span></span>
                            <figure>
                                <a href="#"><img src="{{asset('images/room/kingroom.jpg')}}" alt=""></a>
                                <figcaption>
                                    <span class="price">$483</span>
                                    <h2 class="caption-title">KingRoom-1</h2>
                                    <a href="{{url('/book')}}" class="button btn-medium" data-filter="filter-countries"><h3>Book Now</h3></a>
                                    <h5>Lorem Ipsum Loremt Specir amie Koie Ckei Dke Ckist...</h5>
                                </figcaption>
                            </figure>
                        </article>

                    </div>
                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-3 filter-all filter-island filter-beach">
                        <article class="box animated" data-animation-type="fadeInRight">
                            <span class="discount"><span class="discount-text">Reserved</span></span>
                            <figure>
                                <a href="#"><img src="{{asset('images/room/kingroom.jpg')}}" alt=""></a>
                                <figcaption>
                                    <span class="price">$483</span>
                                    <h2 class="caption-title">KingRoom-2</h2>
                                    <a href="{{url('/book')}}" class="button btn-medium" data-filter="filter-countries"><h3>Book Now</h3></a>
                                    <h5>Lorem Ipsum Loremt Specir amie Koie Ckei Dke Ckist...</h5>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-3 filter-all filter-countries">
                        <article class="box animated" data-animation-type="fadeInRight">
                            <span class="discount"><span class="discount-text">Available</span></span>
                            <figure>
                                <a href="#"><img src="{{asset('images/room/kingroom.jpg')}}" alt=""></a>
                                <figcaption>
                                    <span class="price">$483</span>
                                    <h2 class="caption-title">KingRoom-3</h2>
                                    <a href="{{url('/book')}}" class="button btn-medium" data-filter="filter-countries"><h3>Book Now</h3></a>
                                    <h5>Lorem Ipsum Loremt Specir amie Koie Ckei Dke Ckist...</h5>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-3 filter-all filter-beach">
                        <article class="box animated" data-animation-type="fadeInRight">
                            <span class="discount"><span class="discount-text">Available</span></span>
                            <figure>
                                <a href="#"><img src="{{asset('images/room/kingroom.jpg')}}" alt=""></a>
                                <figcaption>
                                    <span class="price">$483</span>
                                    <h2 class="caption-title">KingRoom-4</h2>
                                    <a href="{{url('/book')}}" class="button btn-medium" data-filter="filter-countries"><h3>Book Now</h3></a>
                                    <h5>Lorem Ipsum Loremt Specir amie Koie Ckei Dke Ckist...</h5>
                                </figcaption>
                            </figure>
                        </article>
                    </div>

                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-3 filter-all filter-beach">
                        <article class="box animated" data-animation-type="fadeInRight">
                            <span class="discount"><span class="discount-text">Available</span></span>
                            <figure>
                                <a href="#"><img src="{{asset('images/room/kingroom.jpg')}}" alt=""></a>
                                <figcaption>
                                    <span class="price">$483</span>
                                    <h2 class="caption-title">KingRoom-</h2>
                                    <a href="{{url('/book')}}" class="button btn-medium" data-filter="filter-countries"><h3>Book Now</h3></a>
                                    <h5>Lorem Ipsum Loremt Specir amie Koie Ckei Dke Ckist...</h5>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-3 filter-all filter-ocean">
                        <article class="box animated" data-animation-type="fadeInRight">
                            <span class="discount"><span class="discount-text">Reserved</span></span>
                            <figure>
                                <a href="#"><img src="{{asset('images/room/kingroom.jpg')}}" alt=""></a>
                                <figcaption>
                                    <span class="price">$483</span>
                                    <h2 class="caption-title">KingRoom-6</h2>
                                    <a href="{{url('/book')}}" class="button btn-medium" data-filter="filter-countries"><h3>Book Now</h3></a>
                                    <h5>Lorem Ipsum Loremt Specir amie Koie Ckei Dke Ckist...</h5>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-3 filter-all filter-countries">
                        <article class="box animated" data-animation-type="fadeInRight">
                            <span class="discount"><span class="discount-text">Reserved</span></span>
                            <figure>
                                <a href="#"><img src="{{asset('images/room/kingroom.jpg')}}" alt=""></a>
                                <figcaption>
                                    <span class="price">$483</span>
                                    <h2 class="caption-title">KingRoom-7</h2>
                                    <a href="{{url('/book')}}" class="button btn-medium" data-filter="filter-countries"><h3>Book Now</h3></a>
                                    <h5>Lorem Ipsum Loremt Specir amie Koie Ckei Dke Ckist...</h5>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-3 filter-all filter-beach filter-ocean">
                        <article class="box animated" data-animation-type="fadeInRight">
                            <span class="discount"><span class="discount-text">Reserved</span></span>
                            <figure>
                                <a href="#"><img src="{{asset('images/room/kingroom.jpg')}}" alt=""></a>
                                <figcaption>
                                    <span class="price">$483</span>
                                    <h2 class="caption-title">KingRoom-8</h2>
                                    <a href="{{url('/book')}}" class="button btn-medium" data-filter="filter-countries"><h3>Book Now</h3></a>
                                    <h5>Lorem Ipsum Loremt Specir amie Koie Ckei Dke Ckist...</h5>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
            <ul class="pagination clearfix">
                <li class="prev disabled"><a href="#">Previous</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>

                <li class="disabled"><span>...</span></li>
                <li><a href="#">5</a></li>
                <li class="next"><a href="#">Next</a></li>
            </ul>
        </div>
        </div>
    </section>

@endsection