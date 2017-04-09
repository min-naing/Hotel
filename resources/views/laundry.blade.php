@extends('layout.master')

@section('title','Laundry')
@section('nav','Laundry')
@section('nav_name','Laundry')
@section('content')

    <section id="content">
        <div class="container">
            <div id="main">
                <div class="row image-box style1 add-clearfix">
                    <div class="col-sm-6 col-md-4">
                        <article class="box">
                            <figure>
                                <a class="" title="" href="#"><img width="270" height="160" alt="" src="{{asset('images/service/shoeshinning.jpg')}}"></a>
                            </figure>
                            <div class="details">
                                <h3 class="box-title">Shoeshining Service</h3><br><h5>Lorem Ipsum Loremt Specir amie Koie Ckei Dke Ckist...</h5>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <article class="box">
                            <figure>
                                <a class="" title="" href="#"><img width="270" height="160" alt="" src="{{asset('images/service/ironning.png')}}"></a>
                            </figure>
                            <div class="details">
                                <h3 class="box-title">Ironing Service</h3><br><h5>Lorem Ipsum Loremt Specir amie Koie Ckei Dke Ckist...</h5>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <article class="box">
                            <figure>
                                <a class="" title="" href="#"><img width="270" height="160" alt="" src="{{asset('images/service/laundry.jpg')}}"></a>
                            </figure>
                            <div class="details">
                                <h3 class="box-title">Laundry Service</h3><br><h5>Lorem Ipsum Loremt Specir amie Koie Ckei Dke Ckist...</h5>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

