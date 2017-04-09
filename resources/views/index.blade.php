@extends('layout.master')

@section('title','Home')

@section('content')
    <div id="slideshow">
        <div class="fullwidthbanner-container">
            <div class="revolution-slider rev_slider " style="height: 0; overflow: hidden;">
                <ul>    <!-- SLIDE  -->
                    <!-- Slide1 -->
                    <li data-index="rs-4" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <!-- Slider 1 -->
                        <img src="{{asset('images/logo/2.jpg')}}"  alt="" title="Slider1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- Total 13 Layers (8 pics,13 texts) -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-4-layer-1"
                             data-x="351"
                             data-y="-15"
                             data-width="['none','none','none','none']"
                             data-height="['none','none','none','none']"
                             data-transform_idle="o:1;"

                             data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="auto:auto;s:300;"
                             data-start="500"
                             data-responsive_offset="on"


                             style="z-index: 5;"><img src="http://static.soaptheme.net/uploads/revslider1/couple/ba221.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-4-layer-2"
                             data-x="595"
                             data-y="5"
                             data-width="['none','none','none','none']"
                             data-height="['none','none','none','none']"
                             data-transform_idle="o:1;"

                             data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="y:-50px;opacity:0;s:300;s:300;"
                             data-start="800"
                             data-responsive_offset="on"


                             style="z-index: 6;"><img src="http://static.soaptheme.net/uploads/revslider1/couple/ba231.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-4-layer-3"
                             data-x="315"
                             data-y="-40"
                             data-width="['none','none','none','none']"
                             data-height="['none','none','none','none']"
                             data-transform_idle="o:1;"

                             data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="y:-50px;opacity:0;s:300;s:300;"
                             data-start="1100"
                             data-responsive_offset="on"


                             style="z-index: 7;"><img src="http://static.soaptheme.net/uploads/revslider1/couple/sun11.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-4-layer-4"
                             data-x="center" data-hoffset=""
                             data-y="bottom" data-voffset=""
                             data-width="['none','none','none','none']"
                             data-height="['none','none','none','none']"
                             data-transform_idle="o:1;"

                             data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="y:50px;opacity:0;s:300;s:300;"
                             data-start="1400"
                             data-responsive_offset="on"


                             style="z-index: 8;"><img src="http://static.soaptheme.net/uploads/revslider1/couple/big-clud.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-4-layer-5"
                             data-x="-485"
                             data-y="573"
                             data-width="['none','none','none','none']"
                             data-height="['none','none','none','none']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:left;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:50px;opacity:0;s:300;s:300;"
                             data-start="1700"
                             data-responsive_offset="on"


                             style="z-index: 9;"><img src="http://static.soaptheme.net/uploads/revslider1/couple/grass1.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-4-layer-6"
                             data-x="540"
                             data-y="106"
                             data-width="['none','none','none','none']"
                             data-height="['none','none','none','none']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:left;s:2500;e:Power3.easeInOut;"
                             data-transform_out="x:right;s:500;s:500;"
                             data-start="2500"
                             data-responsive_offset="on"


                             style="z-index: 10;"><img src="http://static.soaptheme.net/uploads/revslider1/couple/cycle.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-4-layer-7"
                             data-x="366"
                             data-y="588"
                             data-width="['none','none','none','none']"
                             data-height="['none','none','none','none']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:left;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:right;s:300;s:300;"
                             data-start="2000"
                             data-responsive_offset="on"


                             style="z-index: 11;"><img src="http://static.soaptheme.net/uploads/revslider1/couple/top-grass.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                        <!-- LAYER NR. 8 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-4-layer-8"
                             data-x="998"
                             data-y="-16"
                             data-width="['none','none','none','none']"
                             data-height="['none','none','none','none']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:right;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:right;s:300;s:300;"
                             data-start="2600"
                             data-responsive_offset="on"


                             style="z-index: 12;"><img src="http://static.soaptheme.net/uploads/revslider1/couple/patiyanw.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                        <!-- LAYER NR. 9 -->
                        <div class="tp-caption large_bold_white_med_222   tp-resizeme"
                             id="slide-4-layer-9"
                             data-x="15"
                             data-y="186"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:right;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                             data-start="2900"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


                             style="z-index: 13;">The Most Wonderful Hotel In The World!</div>

                        <!-- LAYER NR. 10 -->
                        <div class="tp-caption large_bold_white_med_222   tp-resizeme"
                             id="slide-4-layer-10"
                             data-x="15"
                             data-y="234"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:right;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                             data-start="3200"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


                             style="z-index: 14;">guaranteed! </div>

                        <!-- LAYER NR. 11 -->
                        <div class="tp-caption black3_1112   tp-resizeme"
                             id="slide-4-layer-11"
                             data-x="15"
                             data-y="299"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:left;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                             data-start="3500"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


                             style="z-index: 15;">Vestibulum laoreet condimentum scelerisque. Proin non massa ac<br> urna placerat aliquet ac ac leo. Vestibulum bibendum elit quis aliquam<br>  cursus. Sed elit quam, egestas adipiscing fermentum. </div>

                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption largewhitebg_button1   tp-resizeme"
                             id="slide-4-layer-12"
                             data-x="15"
                             data-y="389"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                             data-start="3800"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


                             style="z-index: 16;"><a href="#">Thank You</a> </div>

                        <!-- LAYER NR. 13 -->
                        <div class="tp-caption largewhitebg_button1   tp-resizeme"
                             id="slide-4-layer-13"
                             data-x="160"
                             data-y="389"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:right;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                             data-start="4100"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


                             style="z-index: 17;"><a href="#">Dreamberry</a> </div>
                    </li>
                    <!-- End Of Slider 1 -->

                    <!-- Slide2 -->
                    <li data-index="rs-5" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="http://static.soaptheme.net/uploads/revslider1/couple/bg6.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('images/logo/6.jpg')}}"  alt="" title="Slider1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-5-layer-1"
                             data-x="center" data-hoffset=""
                             data-y="bottom" data-voffset=""
                             data-width="['none','none','none','none']"
                             data-height="['none','none','none','none']"
                             data-transform_idle="o:1;"

                             data-transform_in="y:bottom;s:3000;e:easeInOutQuint;"
                             data-transform_out="opacity:0;s:600;s:600;"
                             data-start="500"
                             data-responsive_offset="on"


                             style="z-index: 5;"><img src="http://static.soaptheme.net/uploads/revslider1/couple/car.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption large_bold_white_med_222   tp-resizeme"
                             id="slide-5-layer-2"
                             data-x="15"
                             data-y="186"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:right;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                             data-start="1800"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


                             style="z-index: 6;">What are you waiting for  </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption large_bold_white_med_222   tp-resizeme"
                             id="slide-5-layer-3"
                             data-x="15"
                             data-y="233"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:right;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                             data-start="2000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


                             style="z-index: 7;">Come and enjoy </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption black3_1112   tp-resizeme"
                             id="slide-5-layer-4"
                             data-x="15"
                             data-y="295"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:left;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                             data-start="2200"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


                             style="z-index: 8;">Vestibulum laoreet condimentum scelerisque. Proin non massa ac<br> urna placerat aliquet ac ac leo. Vestibulum bibendum elit quis aliquam<br>  cursus. Sed elit quam, egestas adipiscing fermentum. </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption largewhitebg_button1   tp-resizeme"
                             id="slide-5-layer-5"
                             data-x="15"
                             data-y="386"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                             data-start="2500"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


                             style="z-index: 9;"><a href="#">Storm Spirit</a> </div>

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption largewhitebg_button1   tp-resizeme"
                             id="slide-5-layer-6"
                             data-x="161"
                             data-y="386"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:right;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                             data-start="2800"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


                             style="z-index: 10;"><a href="#">Dragon Knight</a> </div>
                    </li>
                    <!-- End of Slider 2 -->

                    <!-- Slide3 -->
                    <li data-index="rs-6" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="http://static.soaptheme.net/uploads/revslider1/couple/background.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('images/logo/4.jpg')}}"  alt="" title="Slider1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-6-layer-1"
                             data-x="-281"
                             data-y="126"
                             data-width="['none','none','none','none']"
                             data-height="['none','none','none','none']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:left;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                             data-start="180"
                             data-responsive_offset="on"


                             style="z-index: 5;"><img src="http://static.soaptheme.net/uploads/revslider1/couple/mountains.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-6-layer-2"
                             data-x="252"
                             data-y="115"
                             data-width="['none','none','none','none']"
                             data-height="['none','none','none','none']"
                             data-transform_idle="o:1;"

                             data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="opacity:0;s:300;s:300;"
                             data-start="2200"
                             data-responsive_offset="on"


                             style="z-index: 6;"><img src="http://static.soaptheme.net/uploads/revslider1/couple/ballon1.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-6-layer-3"
                             data-x="-118"
                             data-y="93"
                             data-width="['none','none','none','none']"
                             data-height="['none','none','none','none']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                             data-start="2000"
                             data-responsive_offset="on"


                             style="z-index: 7;"><img src="http://static.soaptheme.net/uploads/revslider1/couple/left-cloud.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-6-layer-4"
                             data-x="796"
                             data-y="95"
                             data-width="['none','none','none','none']"
                             data-height="['none','none','none','none']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:right;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:50px;opacity:0;s:300;s:300;"
                             data-start="3400"
                             data-responsive_offset="on"


                             style="z-index: 8;"><img src="http://static.soaptheme.net/uploads/revslider1/couple/right-cloud.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-6-layer-5"
                             data-x="965"
                             data-y="312"
                             data-width="['none','none','none','none']"
                             data-height="['none','none','none','none']"
                             data-transform_idle="o:1;"

                             data-transform_in="opacity:0;s:1800;e:Power3.easeInOut;"
                             data-transform_out="opacity:0;s:300;s:300;"
                             data-start="3200"
                             data-responsive_offset="on"


                             style="z-index: 9;"><img src="http://static.soaptheme.net/uploads/revslider1/couple/sand.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-6-layer-6"
                             data-x="1106"
                             data-y="238"
                             data-width="['none','none','none','none']"
                             data-height="['none','none','none','none']"
                             data-transform_idle="o:1;"

                             data-transform_in="opacity:0;s:1800;e:Power3.easeInOut;"
                             data-transform_out="opacity:0;s:300;s:300;"
                             data-start="2500"
                             data-responsive_offset="on"


                             style="z-index: 10;"><img src="http://static.soaptheme.net/uploads/revslider1/couple/palm.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-6-layer-7"
                             data-x="984"
                             data-y="242"
                             data-width="['none','none','none','none']"
                             data-height="['none','none','none','none']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:right;s:2500;e:Power3.easeInOut;"
                             data-transform_out="x:left;s:300;s:300;"
                             data-start="2800"
                             data-responsive_offset="on"


                             style="z-index: 11;"><img src="http://static.soaptheme.net/uploads/revslider1/couple/bird.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                        <!-- LAYER NR. 8 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-6-layer-8"
                             data-x="1043"
                             data-y="277"
                             data-width="['none','none','none','none']"
                             data-height="['none','none','none','none']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:right;s:2000;e:Power3.easeInOut;"
                             data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                             data-start="3000"
                             data-responsive_offset="on"


                             style="z-index: 12;"><img src="http://static.soaptheme.net/uploads/revslider1/couple/small-bird.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                        <!-- LAYER NR. 9 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-6-layer-9"
                             data-x="362"
                             data-y="164"
                             data-width="['none','none','none','none']"
                             data-height="['none','none','none','none']"
                             data-transform_idle="o:1;"

                             data-transform_in="opacity:0;s:2000;e:Power3.easeInOut;"
                             data-transform_out="y:bottom;s:300;s:300;"
                             data-start="3600"
                             data-responsive_offset="on"


                             style="z-index: 13;"><img src="http://static.soaptheme.net/uploads/revslider1/couple/couple.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                        <!-- LAYER NR. 10 -->
                        <div class="tp-caption large_bold_white_med_222   tp-resizeme"
                             id="slide-6-layer-10"
                             data-x="15"
                             data-y="185"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                             data-start="3800"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


                             style="z-index: 14;">I Love You More Than I Can Say  </div>

                        <!-- LAYER NR. 11 -->
                        <div class="tp-caption large_bold_white_med_222   tp-resizeme"
                             id="slide-6-layer-11"
                             data-x="15"
                             data-y="233"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:left;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                             data-start="3900"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


                             style="z-index: 15;">guaranteed! </div>

                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption black3_1112   tp-resizeme"
                             id="slide-6-layer-12"
                             data-x="15"
                             data-y="292"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:left;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                             data-start="4000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


                             style="z-index: 16;">Vestibulum laoreet condimentum scelerisque. Proin non massa ac<br> urna placerat aliquet ac ac leo. Vestibulum bibendum elit quis aliquam<br>  cursus. Sed elit quam, egestas adipiscing fermentum. </div>

                        <!-- LAYER NR. 13 -->
                        <div class="tp-caption largewhitebg_button1   tp-resizeme"
                             id="slide-6-layer-13"
                             data-x="15"
                             data-y="382"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                             data-start="4200"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


                             style="z-index: 17;"><a href="#">Kyaw wai</a> </div>

                        <!-- LAYER NR. 14 -->
                        <div class="tp-caption largewhitebg_button1   tp-resizeme"
                             id="slide-6-layer-14"
                             data-x="158"
                             data-y="382"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-transform_idle="o:1;"

                             data-transform_in="x:right;s:1500;e:Power3.easeInOut;"
                             data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                             data-start="4300"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


                             style="z-index: 18;"><a href="#">Yan Tun</a> </div>
                    </li>
                    <!-- End of slider 3 -->
                </ul>
            </div>
        </div>
    </div>
    <!-- End of Slider -->

    <section id="content">
        <div class="search-box-wrapper">
            <div class="sarch-box container">
                <div class="search-tab-content">
                    <div class="tab-pane fade active in" id="hotels-tab">
                        <form action="" method="post">
                            <div class="row">
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
                                    <button type="submit" class="full-width icon-check animated" data-animation-type="bounce" data-animation-duration="1">SEARCH NOW</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="flights-tab">
                        <form action="flight-list-view.html" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="title">Where</h4>
                                    <div class="form-group">
                                        <label>Leaving From</label>
                                        <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                    </div>
                                    <div class="form-group">
                                        <label>Going To</label>
                                        <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <h4 class="title">When</h4>
                                    <label>Departing On</label>
                                    <div class="form-group row">
                                        <div class="col-xs-6">
                                            <div class="datepicker-wrap">
                                                <input type="text" name="date_from" class="input-text full-width" placeholder="mm/dd/yy" />
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="selector">
                                                <select class="full-width">
                                                    <option value="1">anytime</option>
                                                    <option value="2">morning</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <label>Arriving On</label>
                                    <div class="form-group row">
                                        <div class="col-xs-6">
                                            <div class="datepicker-wrap">
                                                <input type="text" name="date_to" class="input-text full-width" placeholder="mm/dd/yy" />
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="selector">
                                                <select class="full-width">
                                                    <option value="1">anytime</option>
                                                    <option value="2">morning</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <h4 class="title">Who</h4>
                                    <div class="form-group row">
                                        <div class="col-xs-3">
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
                                        <div class="col-xs-3">
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
                                        <div class="col-xs-6">
                                            <label>Promo Code</label>
                                            <input type="text" class="input-text full-width" placeholder="type here" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xs-3">
                                            <label>Infants</label>
                                            <div class="selector">
                                                <select class="full-width">
                                                    <option value="1">01</option>
                                                    <option value="2">02</option>
                                                    <option value="3">03</option>
                                                    <option value="4">04</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 pull-right">
                                            <label>&nbsp;</label>
                                            <button class="full-width icon-check">SERACH NOW</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="flight-and-hotel-tab">
                        <form action=""s method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="title">Where</h4>
                                    <div class="form-group">
                                        <label>Leaving From</label>
                                        <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                    </div>
                                    <div class="form-group">
                                        <label>Going To</label>
                                        <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <h4 class="title">When</h4>
                                    <label>Departing On</label>
                                    <div class="form-group row">
                                        <div class="col-xs-6">
                                            <div class="datepicker-wrap">
                                                <input type="text" name="date_from" class="input-text full-width" placeholder="mm/dd/yy" />
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="selector">
                                                <select class="full-width">
                                                    <option value="1">anytime</option>
                                                    <option value="2">morning</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <label>Arriving On</label>
                                    <div class="form-group row">
                                        <div class="col-xs-6">
                                            <div class="datepicker-wrap">
                                                <input type="text" name="date_to" class="input-text full-width" placeholder="mm/dd/yy" />
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="selector">
                                                <select class="full-width">
                                                    <option value="1">anytime</option>
                                                    <option value="2">morning</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <h4 class="title">Who</h4>
                                    <div class="form-group row">
                                        <div class="col-xs-3">
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
                                        <div class="col-xs-3">
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
                                        <div class="col-xs-6">
                                            <label>Promo Code</label>
                                            <input type="text" class="input-text full-width" placeholder="type here" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xs-3">
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
                                        <div class="col-xs-6 pull-right">
                                            <label>&nbsp;</label>
                                            <button class="full-width icon-check">SERACH NOW</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="cars-tab">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="title">Where</h4>
                                    <div class="form-group">
                                        <label>Pick Up</label>
                                        <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                    </div>
                                    <div class="form-group">
                                        <label>Drop Off</label>
                                        <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <h4 class="title">When</h4>
                                    <div class="form-group">
                                        <label>Pick-Up Date / Time</label>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_from" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">anytime</option>
                                                        <option value="2">morning</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Drop-Off Date / Time</label>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_to" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">anytime</option>
                                                        <option value="2">morning</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <h4 class="title">Who</h4>
                                    <div class="form-group row">
                                        <div class="col-xs-3">
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
                                        <div class="col-xs-3">
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
                                        <div class="col-xs-6">
                                            <label>Promo Code</label>
                                            <input type="text" class="input-text full-width" placeholder="type here" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xs-6">
                                            <label>Car Type</label>
                                            <div class="selector">
                                                <select class="full-width">
                                                    <option value="">select a car type</option>
                                                    <option value="economy">Economy</option>
                                                    <option value="compact">Compact</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <label>&nbsp;</label>
                                            <button class="full-width icon-check">SERACH NOW</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="cruises-tab">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="title">Where</h4>
                                    <div class="form-group">
                                        <label>Your Destination</label>
                                        <input type="text" class="input-text full-width" placeholder="enter a destination or hotel name" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <h4 class="title">When</h4>
                                    <div class="form-group row">
                                        <div class="col-xs-6">
                                            <label>Departure Date</label>
                                            <div class="datepicker-wrap">
                                                <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <label>Cruise Length</label>
                                            <div class="selector">
                                                <select class="full-width">
                                                    <option value="">select length</option>
                                                    <option value="1">1-2 Nights</option>
                                                    <option value="2">3-4 Nights</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <h4 class="title">Who</h4>
                                    <div class="form-group row">
                                        <div class="col-xs-6">
                                            <label>Cruise Line</label>
                                            <div class="selector">
                                                <select class="full-width">
                                                    <option value="">select cruise line</option>
                                                    <option>Azamara Club Cruises</option>
                                                    <option>Carnival Cruise Lines</option>
                                                    <option>Celebrity Cruises</option>
                                                    <option>Costa Cruise Lines</option>
                                                    <option>Cruise &amp; Maritime Voyages</option>
                                                    <option>Crystal Cruises</option>
                                                    <option>Cunard Line Ltd.</option>
                                                    <option>Disney Cruise Line</option>
                                                    <option>Holland America Line</option>
                                                    <option>Hurtigruten Cruise Line</option>
                                                    <option>MSC Cruises</option>
                                                    <option>Norwegian Cruise Line</option>
                                                    <option>Oceania Cruises</option>
                                                    <option>Orion Expedition Cruises</option>
                                                    <option>P&amp;O Cruises</option>
                                                    <option>Paul Gauguin Cruises</option>
                                                    <option>Peter Deilmann Cruises</option>
                                                    <option>Princess Cruises</option>
                                                    <option>Regent Seven Seas Cruises</option>
                                                    <option>Royal Caribbean International</option>
                                                    <option>Seabourn Cruise Line</option>
                                                    <option>Silversea Cruises</option>
                                                    <option>Star Clippers</option>
                                                    <option>Swan Hellenic Cruises</option>
                                                    <option>Thomson Cruises</option>
                                                    <option>Viking River Cruises</option>
                                                    <option>Windstar Cruises</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <label>&nbsp;</label>
                                            <button class="icon-check full-width">SEARCH NOW</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="flight-status-tab">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="title">Where</h4>
                                    <div class="form-group row">
                                        <div class="col-xs-6">
                                            <label>Leaving From</label>
                                            <input type="text" class="input-text full-width" placeholder="enter a city or place name" />
                                        </div>
                                        <div class="col-xs-6">
                                            <label>Going To</label>
                                            <input type="text" class="input-text full-width" placeholder="enter a city or place name" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-md-2">
                                    <h4 class="title">When</h4>
                                    <div class="form-group">
                                        <label>Departure Date</label>
                                        <div class="datepicker-wrap">
                                            <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-md-2">
                                    <h4 class="title">Who</h4>
                                    <div class="form-group">
                                        <label>Flight Number</label>
                                        <input type="text" class="input-text full-width" placeholder="enter flight number" />
                                    </div>
                                </div>
                                <div class="form-group col-md-2 fixheight">
                                    <label class="hidden-xs">&nbsp;</label>
                                    <button class="icon-check full-width">SEARCH NOW</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="online-checkin-tab">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="title">Where</h4>
                                    <div class="form-group row">
                                        <div class="col-xs-6">
                                            <label>Leaving From</label>
                                            <input type="text" class="input-text full-width" placeholder="enter a city or place name" />
                                        </div>
                                        <div class="col-xs-6">
                                            <label>Going To</label>
                                            <input type="text" class="input-text full-width" placeholder="enter a city or place name" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-md-2">
                                    <h4 class="title">When</h4>
                                    <div class="form-group">
                                        <label>Departure Date</label>
                                        <div class="datepicker-wrap">
                                            <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-md-2">
                                    <h4 class="title">Who</h4>
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="input-text full-width" placeholder="enter your full name" />
                                    </div>
                                </div>
                                <div class="form-group col-md-2 fixheight">
                                    <label class="hidden-xs">&nbsp;</label>
                                    <button class="icon-check full-width">SEARCH NOW</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <h2>Recommended Hotels</h2>
                <div class="block image-carousel style2 flexslider" data-animation="slide" data-item-width="270" data-item-margin="30">
                    <ul class="slides image-box listing-style2">
                        <li>
                            <article class="box">
                                <figure>
                                    <a href="{{url('ajax/slideshow-popup.html')}}" class="hover-effect popup-gallery"><img src="{{asset('images/hotel/shwe san taw pagoda.jpg')}}" alt="" width="270" height="160" /></a>
                                </figure>
                                <div class="details">
                                    <a title="View all" href="hotel-detailed.html" class="pull-right button uppercase">select</a>
                                    <h4 class="box-title">Gran Canaria</h4>
                                    <label class="price-wrapper">
                                        <span class="price-per-unit">$322</span>avg/night
                                    </label>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="box">
                                <figure>
                                    <a href="{{url('ajax/slideshow-popup.html')}}" class="hover-effect popup-gallery"><img src="images/hotel/King.jpg" alt="" width="270" height="160" /></a>
                                </figure>
                                <div class="details">
                                    <a title="View all" href="hotel-detailed.html" class="pull-right button uppercase">select</a>
                                    <h4 class="box-title">Hotel Hilton</h4>
                                    <label class="price-wrapper">
                                        <span class="price-per-unit">$620</span>avg/night
                                    </label>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="box">
                                <figure>
                                    <a href="{{url('ajax/slideshow-popup.html')}}" class="hover-effect popup-gallery"><img src="images/hotel/King.jpg" alt="" width="270" height="160" /></a>
                                </figure>
                                <div class="details">
                                    <a title="View all" href="#" class="pull-right button uppercase">select</a>
                                    <h4 class="box-title">Roosevelt Hotel</h4>
                                    <label class="price-wrapper">
                                        <span class="price-per-unit">$170</span>avg/night
                                    </label>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="box">
                                <figure>
                                    <a href="{{url('ajax/slideshow-popup.html')}}" class="hover-effect popup-gallery"><img src="images/hotel/King.jpg" alt="" width="270" height="160" /></a>
                                </figure>
                                <div class="details">
                                    <a title="View all" href="#" class="pull-right button uppercase">select</a>
                                    <h4 class="box-title">Forte Do Vale</h4>
                                    <label class="price-wrapper">
                                        <span class="price-per-unit">$120</span>avg/night
                                    </label>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="box">
                                <figure>
                                    <a href="{{url('ajax/slideshow-popup.html')}}" class="hover-effect popup-gallery"><img src="images/hotel/King.jpg" alt="" width="270" height="160" /></a>
                                </figure>
                                <div class="details">
                                    <a title="View all" href="#" class="pull-right button uppercase">select</a>
                                    <h4 class="box-title">Gran Canaria</h4>
                                    <label class="price-wrapper">
                                        <span class="price-per-unit">$322</span>avg/night
                                    </label>
                                </div>
                            </article>
                        </li>
                    </ul>
                </div>

                <div class="block row">
                    <div class="col-md-6">
                        <h2>Rooms</h2>
                        <div class="tab-container style1 box">
                            <ul class="tabs">
                                <li class="active"><a href="#hot-hotel-popular" data-toggle="tab">Popular</a></li>
                                <li><a href="#hot-hotel-lasvegas" data-toggle="tab">Las Vegas</a></li>
                                <li><a href="#hot-hotel-miami" data-toggle="tab">Miami</a></li>
                                <li><a href="#hot-hotel-sanfrancisco" data-toggle="tab">San Francisco</a></li>
                                <li><a href="#hot-hotel-hongkong" data-toggle="tab">Hong Kong</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="hot-hotel-popular">
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <a href="#" class="badge-container"><span class="badge-content">save 23%</span><img class="full-width" src="images/hotel/King.jpg" alt="" width="63" height="63" /></a>
                                        </div>
                                        <div class="col-xs-8">
                                            <h5 class="box-title">King Room<small>New york, usa</small></h5>
                                            <p class="no-margin">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
                                        </div>
                                        <div class="col-xs-2">
                                            <span class="price"><small>avg/night</small>$115</span>
                                            <br /><br />
                                            <a class="button green-bg pull-right" href="hotel-detailed.html">SELECT</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <a href="#" class="badge-container"><span class="badge-content">save 23%</span><img class="full-width" src="images/hotel/Queen.jpg" alt="" width="63" height="63" /></a>
                                        </div>
                                        <div class="col-xs-8">
                                            <h5 class="box-title">Queen Room<small>New york, usa</small></h5>
                                            <p class="no-margin">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
                                        </div>
                                        <div class="col-xs-2">
                                            <span class="price"><small>avg/night</small>$115</span>
                                            <br /><br />
                                            <a class="button green-bg pull-right" href="hotel-detailed.html">SELECT</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="hot-hotel-lasvegas">

                                </div>
                                <div class="tab-pane fade" id="hot-hotel-miami">

                                </div>
                                <div class="tab-pane fade" id="hot-hotel-sanfrancisco">

                                </div>
                                <div class="tab-pane fade" id="hot-hotel-hongkong">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>Famous Place In Pyay</h2>
                        <div class="testimonial style1 box">
                            <ul class="slides ">
                                <li>
                                    <p class="description">This is the 3rd time I’ve used Travelo website and telling you the truth their services are always realiable and it only takes few minutes to plan and finalize your entire trip using their extremely fast website and up to date listings. I’m super excited about my next trip to Paris.</p>
                                    <div class="author clearfix">
                                        <a href="#"><img src="{{asset('images/hotel/shwe san taw pagoda.jpg')}}" alt="" width="74" height="74" /></a>
                                        <h5 class="name">Shwe San Taw<small>Pagoda</small></h5>
                                    </div>
                                </li>
                                <li>
                                    <p class="description">This is the 3rd time I’ve used Travelo website and telling you the truth their services are always realiable and it only takes few minutes to plan and finalize your entire trip using their extremely fast website and up to date listings. I’m super excited about my next trip to Paris.</p>
                                    <div class="author clearfix">
                                        <a href="#"><img src="http://placehold.it/270x270" alt="" width="74" height="74" /></a>
                                        <h5 class="name">Lisa Kimberly<small>guest</small></h5>
                                    </div>
                                </li>
                                <li>
                                    <p class="description">This is the 3rd time I’ve used Travelo website and telling you the truth their services are always realiable and it only takes few minutes to plan and finalize your entire trip using their extremely fast website and up to date listings. I’m super excited about my next trip to Paris.</p>
                                    <div class="author clearfix">
                                        <a href="#"><img src="http://placehold.it/270x270" alt="" width="74" height="74" /></a>
                                        <h5 class="name">Jessica Brown<small>guest</small></h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h2>Services & Facilities</h2>
                <div class="image-carousel style2 flexslider" data-animation="slide" data-item-width="270" data-item-margin="30">
                    <ul class="slides image-box hotel listing-style1">
                        <li>
                            <article class="box">
                                <figure>
                                    <a href="{{url('ajax/slideshow-popup.html')}}" class="hover-effect popup-gallery"><img width="270" height="160" alt="" src="images/hotel/wedding.jpg"></a>
                                </figure>
                                <div class="details">
                                        <span class="price">
                                            <small>avg/night</small>
                                            $360
                                        </span>
                                    <h4 class="box-title">Wedding Room<small>Paris france</small></h4>
                                    <div class="feedback">
                                        <div data-placement="bottom" data-toggle="tooltip" class="five-stars-container" title="4 stars"><span style="width: 80%;" class="five-stars"></span></div>
                                        <span class="review">270 reviews</span>
                                    </div>
                                    <p class="description">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
                                    <div class="action">
                                        <a class="button btn-small" href="#">SELECT</a>
                                        <a class="button btn-small yellow popup-map" href="#" data-box="48.856614, 2.352222">VIEW ON MAP</a>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="box">
                                <figure>
                                    <a href="{{url('ajax/slideshow-popup.html')}}" class="hover-effect popup-gallery"><img width="270" height="160" alt="" src="images/hotel/spa.jpg"></a>
                                </figure>
                                <div class="details">
                                    <span class="price"><small>avg/night</small>$188</span>
                                    <h4 class="box-title">Spa<small>Albufeira</small></h4>
                                    <div class="feedback">
                                        <div data-placement="bottom" data-toggle="tooltip" class="five-stars-container" title="4 stars"><span style="width: 80%;" class="five-stars"></span></div>
                                        <span class="review">170 reviews</span>
                                    </div>
                                    <p class="description">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
                                    <div class="action">
                                        <a class="button btn-small" href="#">SELECT</a>
                                        <a class="button btn-small yellow popup-map" href="#" data-box="37.089072, -8.247880">VIEW ON MAP</a>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="box">
                                <figure>
                                    <a href="{{url('ajax/slideshow-popup.html')}}" class="hover-effect popup-gallery"><img width="270" height="160" alt="" src="images/hotel/fitnesscenter.jpg"></a>
                                </figure>
                                <div class="details">
                                    <span class="price"><small>avg/night</small>$322</span>
                                    <h4 class="box-title">Fitness Center<small>spain</small></h4>
                                    <div class="feedback">
                                        <div data-placement="bottom" data-toggle="tooltip" class="five-stars-container" title="4 stars"><span style="width: 80%;" class="five-stars"></span></div>
                                        <span class="review">485 reviews</span>
                                    </div>
                                    <p class="description">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
                                    <div class="action">
                                        <a class="button btn-small" href="#">SELECT</a>
                                        <a class="button btn-small yellow popup-map" href="#" data-box="40.463667, -3.749220">VIEW ON MAP</a>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="box">
                                <figure>
                                    <a href="{{url('ajax/slideshow-popup.html')}}" class="hover-effect popup-gallery"><img width="270" height="160" alt="" src="images/hotel/business%20services.jpg"></a>
                                </figure>
                                <div class="details">
                                    <span class="price"><small>avg/night</small>$170</span>
                                    <h4 cla ss="box-title">Business Facilities<small>New york</small></h4>
                                    <div class="feedback">
                                        <div data-placement="bottom" data-toggle="tooltip" class="five-stars-container" title="4 stars"><span style="width: 80%;" class="five-stars"></span></div>
                                        <span class="review">75 reviews</span>
                                    </div>
                                    <p class="description">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
                                    <div class="action">
                                        <a class="button btn-small" href="hotel-detailed.html">SELECT</a>
                                        <a class="button btn-small yellow popup-map" href="#" data-box="40.705631, -73.978003">VIEW ON MAP</a>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="box">
                                <figure>
                                    <a href="ajax/slideshow-popup.html" class="hover-effect popup-gallery"><img width="270" height="160" alt="" src="images/hotel/laundry.jpg"></a>
                                </figure>
                                <div class="details">
                                        <span class="price">
                                            <small>avg/night</small>
                                            $360
                                        </span>
                                    <h4 class="box-title">Laundary Service<small>Paris france</small></h4>
                                    <div class="feedback">
                                        <div data-placement="bottom" data-toggle="tooltip" class="five-stars-container" title="4 stars"><span style="width: 80%;" class="five-stars"></span></div>
                                        <span class="review">270 reviews</span>
                                    </div>
                                    <p class="description">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
                                    <div class="action">
                                        <a class="button btn-small" href="hotel-detailed.html">SELECT</a>
                                        <a class="button btn-small yellow popup-map" href="#" data-box="48.856614, 2.352222">VIEW ON MAP</a>
                                    </div>
                                </div>
                            </article>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="global-map-area promo-box no-margin parallax" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="content-section description pull-right col-sm-9">
                    <div class="table-wrapper hidden-table-sm">
                        <div class="table-cell">
                            <h2 class="m-title animated" data-animation-type="fadeInDown">
                                Tell us where you would like to go.<br /><em>12,000+ Hotel and Resorts Available!</em>
                            </h2>
                        </div>
                        <div class="table-cell action-section col-md-4 no-float">
                            <form action="hotel-list-view.html" method="post">
                                <div class="row">
                                    <div class="col-xs-6 col-md-12">
                                        <input type="text" class="input-text input-large full-width" value="" placeholder="Enter destination or hotel name" />
                                    </div>
                                    <div class="col-xs-6 col-md-12">
                                        <button class="full-width btn-large animated" data-animation-type="fadeInUp" data-animation-delay="1">search hotels</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="image-container col-sm-4">
                    <img src="http://placehold.it/342x258" alt="" width="342" height="258" class="animated" data-animation-type="fadeInUp" data-animation-duration="2" />
                </div>
            </div>
        </div>
    </section>
    @endsection