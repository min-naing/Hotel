@extends('layout.master')

@section('title','Discount & Promotion')
@section('nav','Discount & Promotion')
@section('nav_name','Discount & Promotion')
@section('content')


    <section id="content">
        <div class="container">
            <div id="main">
                <div class="gallery-filter box">
                    <a href="#" class="button btn-medium active" data-filter="filter-all">All</a>
                    <a href="#" class="button btn-medium" data-filter="filter-countries">Countries</a>
                    <a href="#" class="button btn-medium" data-filter="filter-adventure">Adventure</a>
                    <a href="#" class="button btn-medium" data-filter="filter-island">Island</a>
                    <a href="#" class="button btn-medium" data-filter="filter-beach">Beach</a>
                    <a href="#" class="button btn-medium" data-filter="filter-ocean">Ocean Park</a>
                </div>
                <div class="items-container isotope row image-box style9">
                    <div class="iso-item col-xs-12 col-sms-12 col-sm-12 col-md-12 filter-all filter-countries">
                        <article class="box">
                            <figure>
                                <a class="hover-effect" title="" href="#"><img width="2000" height="500" alt="" src="{{asset('images/promotion/7.png')}}"></a>
                            </figure>
                            <div class="details">
                                <h4 class="box-title">Beauty of Venice<small>People, Countries</small></h4>
                            </div>
                        </article>
                    </div>
                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-4 filter-all filter-island filter-beach">
                        <article class="box">
                            <figure>
                                <a class="hover-effect" title="" href="#"><img width="370" height="190" alt="" src="{{asset('images/promotion/1.png')}}"></a>
                            </figure>
                            <div class="details">
                                <h4 class="box-title">Family Beach Tour<small>Island, Beach</small></h4>
                            </div>
                        </article>
                    </div>
                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-4 filter-all filter-island filter-beach">
                        <article class="box">
                            <figure>
                                <a class="hover-effect" title="" href="#"><img width="370" height="190" alt="" src="{{asset('images/promotion/2.png')}}"></a>
                            </figure>
                            <div class="details">
                                <h4 class="box-title">La Degue Island<small>Island, Beach</small></h4>
                            </div>
                        </article>
                    </div>
                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-4 filter-all filter-beach filter-ocean">
                        <article class="box">
                            <figure>
                                <a class="hover-effect" title="" href="#"><img width="370" height="190" alt="" src="{{asset('images/promotion/3.png')}}"></a>
                            </figure>
                            <div class="details">
                                <h4 class="box-title">Girl On Beach<small>Enjoy, Sea</small></h4>
                            </div>
                        </article>
                    </div>
                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-4 filter-all filter-countries">
                        <article class="box">
                            <figure>
                                <a class="hover-effect" title="" href="#"><img width="370" height="190" alt="" src="{{asset('images/promotion/4.png')}}"></a>
                            </figure>
                            <div class="details">
                                <h4 class="box-title">Spain<small>People, Countries</small></h4>
                            </div>
                        </article>
                    </div>
                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-4 filter-all filter-beach filter-island">
                        <article class="box">
                            <figure>
                                <a class="hover-effect" title="" href="#"><img width="370" height="190" alt="" src="{{asset('images/promotion/5.png')}}"></a>
                            </figure>
                            <div class="details">
                                <h4 class="box-title">Beach Rest Place<small>Beach, Island</small></h4>
                            </div>
                        </article>
                    </div>
                    <div class="iso-item col-xs-12 col-sms-6 col-sm-6 col-md-4 filter-all filter-adventure filter-ocean">
                        <article class="box">
                            <figure>
                                <a class="hover-effect" title="" href="#"><img width="370" height="190" alt="" src="{{asset('images/promotion/6.png')}}"></a>
                            </figure>
                            <div class="details">
                                <h4 class="box-title">Beautiful Hotel<small>Hotel, Places</small></h4>
                            </div>
                        </article>
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