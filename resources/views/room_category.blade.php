@extends('layout.master')

@section('title','Room')
@section('nav','Room')
@section('nav_name','Room')
@section('content')

    <section id="content">
        <div class="container">
            <div id="main">

                <div class="items-container isotope image-box style9 row">
                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-3 filter-all filter-island filter-beach">
                        <article class="box">
                            <figure>
                                <a class="hover-effect" title="" href="{{url('/rooms')}}"><img width="270" height="160" alt="" src="{{asset('images/room/kingroom.jpg')}}"></a>
                            </figure>
                            <div class="details">

                                <h3 class="box-title">King Room</h3><br><h6>$180.00-$229.00 /night plus tax</h6><br>
                                <h5>Lorem Ipsum Loremt Specir amie Koie Ckei Dke Ckist...</h5>
                            </div>

                        </article>

                    </div>
                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-3 filter-all filter-island filter-beach">
                        <article class="box">
                            <figure>
                                <a class="hover-effect" title="" href="{{url('/rooms')}}"><img width="270" height="160" alt="" src="{{asset('images/room/queen%20room.jpg')}}"></a>
                            </figure>
                            <div class="details">

                                <h3 class="box-title">Standard Queen Room</h3><br><h6>$180.00-$229.00 /night plus tax</h6><br>
                                <h5>Lorem Ipsum Loremt Specir amie Koie Ckei Dke Ckist...</h5>
                            </div>
                        </article>
                    </div>
                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-3 filter-all filter-countries">
                        <article class="box">
                            <figure>
                                <a class="hover-effect" title="" href="{{url('/rooms')}}"><img width="270" height="160" alt="" src="{{asset('images/room/standard%20full%20room.jpg')}}"></a>
                            </figure>
                            <div class="details">

                                <h3 class="box-title">Standard Full Room</h3><br><h6>$180.00-$229.00 /night plus tax</h6><br>
                                <h5>Lorem Ipsum Loremt Specir amie Koie Ckei Dke Ckist...</h5>
                            </div>
                        </article>
                    </div>
                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-3 filter-all filter-beach">
                        <article class="box">
                            <figure>
                                <a class="hover-effect" title="" href="{{url('/rooms')}}"><img width="270" height="160" alt="" src="{{asset('images/room/large%20suite%20room.jpg')}}"></a>
                            </figure>
                            <div class="details">

                                <h3 class="box-title">Large Suite</h3><br><h6>$180.00-$229.00 /night plus tax</h6><br>
                                <h5>Lorem Ipsum Loremt Specir amie Koie Ckei Dke Ckist...</h5>
                            </div>
                        </article>
                    </div>

                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-3 filter-all filter-beach">
                        <article class="box">
                            <figure>
                                <a class="hover-effect" title="" href="{{url('/rooms')}}"><img width="270" height="160" alt="" src="{{asset('images/room/samll%20suite.jpg')}}"></a>
                            </figure>
                            <div class="details">
                                <h3 class="box-title">Small Suite</h3><br><h6>$180.00-$229.00 /night plus tax</h6><br>
                                <h5>Lorem Ipsum Loremt Specir amie Koie Ckei Dke Ckist...</h5>
                            </div>
                        </article>
                    </div>
                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-3 filter-all filter-ocean">
                        <article class="box">
                            <figure>
                                <a class="hover-effect" title="" href="{{url('/rooms')}}"><img width="270" height="160" alt="" src="{{asset('images/room/aprtment%20suite.jpg')}}"></a>
                            </figure>
                            <div class="details">
                                <h3 class="box-title">Apartment Suite</h3><br><h6>$180.00-$229.00 /night plus tax</h6><br>
                                <h5>Lorem Ipsum Loremt Specir amie Koie Ckei Dke Ckist...</h5>
                            </div>
                        </article>
                    </div>
                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-3 filter-all filter-countries">
                        <article class="box">
                            <figure>
                                <a class="hover-effect" title="" href="{{url('/rooms')}}"><img width="270" height="160" alt="" src="{{asset('images/room/single%20room.jpg')}}"></a>
                            </figure>
                            <div class="details">
                                <h3 class="box-title">Single Room</h3><br><h6>$180.00-$229.00 /night plus tax</h6><br>
                                <h5>Lorem Ipsum Loremt Specir amie Koie Ckei Dke Ckist...</h5>
                            </div>
                        </article>
                    </div>
                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-3 filter-all filter-beach filter-ocean">
                        <article class="box">
                            <figure>
                                <a class="hover-effect" title="" href="{{url('/rooms')}}"><img width="270" height="160" alt="" src="{{asset('images/room/view%20point.jpg')}}"></a>
                            </figure>
                            <div class="details">
                                <h3 class="box-title">View Room</h3><br><h6>$180.00-$229.00 /night plus tax</h6><br>
                                <h5>Lorem Ipsum Loremt Specir amie Koie Ckei Dke Ckist...</h5>
                            </div>
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