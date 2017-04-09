@extends('layout.master')

@section('title','Luxury')
@section('nav','Luxury')
@section('nav_name','Luxury')
@section('content')



    <section id="content">
        <div class="container">
            <div id="main">
                <div class="row image-box style1 add-clearfix">
                    <div class="col-sm-6 col-md-4">
                        <article class="box">
                            <figure>
                                <a class="" title="" href="#"><img width="270" height="160" alt="" src="{{asset('images/hotel/luxury1.jpg')}}"></a>
                            </figure>
                            <div class="details">
                                <h3 class="box-title">Swimming Pool</h3><br><h5>We have a hall room that is wide enough to hold a Wedding party.</h5>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <article class="box">
                            <figure>
                                <a class="" title="" href="#"><img width="270" height="160" alt="" src="{{asset('images/hotel/luxury5.jpg')}}"></a>
                            </figure>
                            <div class="details">
                                <h3 class="box-title">Bar & Restaurent</h3><br><h5>We have a hall room that is wide enough to hold a Wedding party.</h5>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <article class="box">
                            <figure>
                                <a class="" title="" href="#"><img width="270" height="160" alt="" src="{{asset('images/hotel/luxury9.jpg')}}"></a>
                            </figure>
                            <div class="details">
                                <h3 class="box-title">Spa</h3><br><h5>We have a hall room that is wide enough to hold a Wedding party.</h5>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection