@extends('layout.master')

@section('title','Book')
@section('nav','Book')
@section('nav_name','Book')
@section('content')
    <section id="content">
        <div class="container">
            <div id="main">
                <div class="search-tab-content">
                    <div class="tab-pane fade active in" id="hotels-tab">

                        <form action="#" method="post">
                            <div class="row las">
                                <div class="form-group col-sm-6 col-md-3">
                                    <h4 class="title">Where</h4>
                                    <label>Your Destination</label>
                                    <input type="text" class="input-text full-width" placeholder="enter a destination or hotel name" />
                                </div>

                                <div class="form-group col-sm-6 col-md-4">
                                    <h4 class="title">When</h4>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label>Check In</label>
                                            <div class="datepicker-wrap">
                                                <input type="text" name="date_from" class="input-text full-width" placeholder="mm/dd/yy" />
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <label>Check Out</label>
                                            <div class="datepicker-wrap">
                                                <input type="text" name="date_to" class="input-text full-width" placeholder="mm/dd/yy" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-sm-6 col-md-3">
                                    <h4 class="title">Who</h4>
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <label>Rooms</label>
                                            <div class="selector">
                                                <select class="full-width">
                                                    <option value="1">01</option>
                                                    <option value="2">02</option>
                                                    <option value="3">03</option>
                                                    <option value="4">04</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <label>Adults</label>
                                            <div class="selector">
                                                <select class="full-width">
                                                    <option value="1">01</option>
                                                    <option value="2">02</option>
                                                    <option value="3">03</option>
                                                    <option value="4">04</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <label>Kids</label>
                                            <div class="selector">
                                                <select class="full-width">
                                                    <option value="1">01</option>
                                                    <option value="2">02</option>
                                                    <option value="3">03</option>
                                                    <option value="4">04</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-sm-6 col-md-2 fixheight">
                                    <label class="hidden-xs">&nbsp;</label>
                                    <button type="submit" class="full-width icon-check animated" data-animation-type="bounce" data-animation-duration="1">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @endsection
