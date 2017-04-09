
<!-- Javascript -->
<script type="text/javascript" src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.noconflict.js')}}"></script>
<script type="text/javascript" src="{{asset('js/modernizr.2.7.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.placeholder.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-ui.1.10.4.min.js')}}"></script>

<!-- Twitter Bootstrap -->
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>

<!-- load revolution slider scripts -->
<script type="text/javascript" src="{{asset('components/revolution_slider/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('components/revolution_slider/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- load BXSlider scripts -->
<script type="text/javascript" src="{{asset('components/jquery.bxslider/jquery.bxslider.min.js')}}"></script>

<!-- load FlexSlider scripts -->
<script type="text/javascript" src="{{asset('components/flexslider/jquery.flexslider-min.js')}}"></script>

<!-- Google Map Api -->
<script type='text/javascript' src="{{asset('http://maps.google.com/maps/api/js?sensor=false&amp;language=en')}}"></script>
<script type="text/javascript" src="{{asset('js/gmap3.min.js')}}"></script>

<!-- parallax -->
<script type="text/javascript" src="{{asset('js/jquery.stellar.min.js')}}"></script>

<!-- waypoint -->
<script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script>

<!-- load page Javascript -->
<script type="text/javascript" src="{{asset('js/theme-scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>

<script type="text/javascript">
    tjq(document).ready(function() {
        tjq('.revolution-slider').revolution(
                {
                    sliderType:"standard",
                    sliderLayout:"auto",
                    dottedOverlay:"none",
                    delay:9000,
                    navigation: {
                        keyboardNavigation:"off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation:"off",
                        mouseScrollReverse:"default",
                        onHoverStop:"on",
                        touch:{
                            touchenabled:"on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        }
                        ,
                        arrows: {
                            style:"default",
                            enable:true,
                            hide_onmobile:false,
                            hide_onleave:false,
                            tmp:'',
                            left: {
                                h_align:"left",
                                v_align:"center",
                                h_offset:20,
                                v_offset:0
                            },
                            right: {
                                h_align:"right",
                                v_align:"center",
                                h_offset:20,
                                v_offset:0
                            }
                        }
                    },
                    visibilityLevels:[1240,1024,778,480],
                    gridwidth:1170,
                    gridheight:646,
                    lazyType:"none",
                    shadow:0,
                    spinner:"spinner4",
                    stopLoop:"off",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,
                    shuffle:"off",
                    autoHeight:"off",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                        simplifyAll:"off",
                        nextSlideOnWindowFocus:"off",
                        disableFocusListener:false
                    }
                });
    });
</script>
</body>
</html>

