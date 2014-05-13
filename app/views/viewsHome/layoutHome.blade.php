<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta charset="utf-8">
    <title> @yield('titulo') </title>
    @section('head')


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
    rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet" media="screen">
    <link href="css/pages/dashboard.css" rel="stylesheet">
    <link href="css/pages/reports.css" rel="stylesheet">
    <link href="css/pages/plans.css" rel="stylesheet">
    <link href="css/looking.css" rel="stylesheet">
    <link rel="shortcut icon" href="ico/logoacunica.ico">
    <script type="text/javascript" src="lib/alertify.js"></script>

    @show
</head>


<body>
    @section('header')
    <div class="navbar-fixed-top" >
        <div class="navbar-inner navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <span style="color:white; font-size:20px;" class="brand"> <img src="img/logoacunica.jpg" height="40" width="30" alt=""/> COMEDOR UNIVERSITARIO
                    </span>
                    <br>
                    <button  class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse1"><span class="btn btn-white">LOGIN</span>
                    </button>

                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="btn btn-white">MENU</span>
                    </button>
                </div>

                <div class="'nav pull-right'">
                    <div class="nav-collapse1" style="padding:2px;">

                        {{ Form::open(array('url' => 'login', 'class' => 'form-inline ')) }}
                        <div class="form-group">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            {{ Form::text('username', Input::old('username'), array('class' => 'form-control', 'placeholder' => 'Nombre de Usuario', 'style' => 'border-radius:0px')); }}

                            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Contraseña', 'style' => 'border-radius:0px'));  }}

                            {{ Form::submit('log in', array('class' => 'btn btn-sm btn-default')) }}
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="navbar-fixed-top" >
            <div class="subnavbar">
                <div class="navbar-collapse collapse">
                    <div class="subnavbar-inner">
                        <div class="container">
                            <ul class="nav">
                                <li class=""><a href="#"><i class="icon-home"></i>Acunica</a> </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user-md"></i>Nosotros <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Mision y Vision</a></li>
                                        <li><a href="#">Historia</a></li>
                                        <li><a href="#">Organigrama</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="#"><i class=" icon-info-sign"></i>Informes</a> </li>
                                <li class="dropdown" class="stat"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-question-sign"></i>Preguntas <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">¿Como Postular?</a></li>
                                        <li><a href="#">¿Requisitos?</a></li>
                                    </ul>
                                </li>
                                <li class="stat"><a href="#"><i class="icon-picture"></i>Imagenes</a> </li>
                                <li class="stat"><a href="#"><i class="icon-th"></i>Eventos</a></li>

                                <li class="stat"><a href="#"><i class="icon-map-marker"></i>Ubicanos</a> </li>
                                <li class="stat"><a href="#"><i class="icon-envelope-alt"></i>Contactenos</a> </li>
                                <li></li>
                            </ul>

                        </div>
                        <!-- /container -->
                    </div>
                    <!-- /subnavbar-inner -->
                </div>
            </div>
            @show

            @section('body')
            <div class="navbar-fixed-top" >
                <div id="slider1_container" style="position: relative; margin: 0 auto;
                top: 0px; left: 0px; width: 1300px; height: 400px; overflow: hidden;">
                <!-- Loading Screen -->
                <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                    top: 0px; left: 0px; width: 100%; height: 100%;">
                </div>
                <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;
        height: 500px; overflow: hidden;">

        <div>
            <img u="image" src="img/1920/c12.jpg" />
            <!--<img src="img/new-site/c-phone.png" style="position: absolute; width: 445px; height: 300px; top: 100px; left: 600px; background-color: transparent;" />-->
            <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
            text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
            color: #FFFFFF;">ACUNICA
        </div>
        <div style="position: absolute; width: 480px; height: 120px; top: 250px; left: 30px; padding: 5px;
        text-align: left; line-height: 36px; font-size: 30px;
        color: #FFFFFF;">
        Asociacion de Comensales de la Universidad Nacional "San Luis Gonzaga de Ica"
    </div>
</div>
<div>
    <img u="image" src="img/1920/l1.jpg" />
    <!--<img src="img/new-site/c-phone.png" style="position: absolute; width: 445px; height: 300px; top: 100px; left: 600px; background-color: transparent;" />-->
    <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
    color: #FFFFFF;">ACUNICA
</div>
<div style="position: absolute; width: 480px; height: 120px; top: 250px; left: 30px; padding: 5px;
text-align: left; line-height: 36px; font-size: 30px;
color: #FFFFFF;">
Asociacion de Comensales de la Universidad Nacional "San Luis Gonzaga de Ica"
</div>
</div>
<div>
    <img u="image" src="img/1920/u2.jpg" />
    <!--<img src="img/new-site/c-phone.png" style="position: absolute; width: 445px; height: 300px; top: 100px; left: 600px; background-color: transparent;" />-->
    <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
    color: #FFFFFF;">ACUNICA
</div>
<div style="position: absolute; width: 480px; height: 120px; top: 250px; left: 30px; padding: 5px;
text-align: left; line-height: 36px; font-size: 30px;
color: #FFFFFF;">
Asociacion de Comensales de la Universidad Nacional "San Luis Gonzaga de Ica"
</div>
</div>
</div>


<style>

*/
.jssorn21 div, .jssorn21 div:hover, .jssorn21 .av
{
    background: url(img/n21.png) no-repeat;
    overflow:hidden;
    cursor: pointer;
}
.jssorn21 div { background-position: -5px -5px; }
.jssorn21 div:hover, .jssorn21 .av:hover { background-position: -35px -5px; }
.jssorn21 .av { background-position: -65px -5px; }
.jssorn21 .dn, .jssorn21 .dn:hover { background-position: -95px -5px; }
</style>
<!-- navigator container -->
<div u="navigator" class="jssorn21" style="position: absolute; bottom: 26px; left: 6px;">
    <!-- navigator item prototype -->
    <div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
</div>
<!-- Navigator Skin End -->

<!-- Direction Navigator Skin Begin -->
<style>
/* jssor slider direction navigator skin 21 css */
/*
.jssord21l              (normal)
.jssord21r              (normal)
.jssord21l:hover        (normal mouseover)
.jssord21r:hover        (normal mouseover)
.jssord21ldn            (mousedown)
.jssord21rdn            (mousedown)
*/
.jssord21l, .jssord21r, .jssord21ldn, .jssord21rdn
{
    position: absolute;
    cursor: pointer;
    display: block;
    background: url(img/d21.png) center center no-repeat;
    overflow: hidden;
}
.jssord21l { background-position: -3px -33px; }
.jssord21r { background-position: -63px -33px; }
.jssord21l:hover { background-position: -123px -33px; }
.jssord21r:hover { background-position: -183px -33px; }
.jssord21ldn { background-position: -243px -33px; }
.jssord21rdn { background-position: -303px -33px; }
</style>
<!-- Arrow Left -->
<span u="arrowleft" class="jssord21l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
</span>
<!-- Arrow Right -->
<span u="arrowright" class="jssord21r" style="width: 55px; height: 55px; top: 123px; right: 8px">
</span>
<!-- Direction Navigator Skin End -->
<a style="display: none" href="http://www.jssor.com">jQuery Carousel</a>
</div>
</div>
@show

@section('back')
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
@show

@section('footer')
<div class="footer">
    <div class="footer-inner">
        <div class="container">
            <div class="row">
                <div> &copy; 2014 Todos los derechos reservados <a href="#"> FISACUNICA </a>
                    <div class="nav pull-right">
                        <a href="#"><i class=" icon-list-alt"></i><span> Blog</span> </a>&nbsp;
                        <a href="#"><i class="icon-twitter-sign"></i><span> Twitter</span> </a>&nbsp;
                        <a href="#"><i class="icon-facebook-sign"></i><span> Facebook</span> </a>&nbsp;
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@show

@section('script')
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/excanvas.min.js"></script>
<script src="js/chart.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>

<script src="js/base.js"></script>
<script>
$(document).ready(function(){
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
// scroll body to 0px on click
$('#back-to-top').click(function () {
    $('#back-to-top').tooltip('hide');
    $('body,html').animate({
        scrollTop: 0
    }, 800);
    return false;
});

$('#back-to-top').tooltip('show');

});
</script>
<script>
$(document).ready(function(){
//Handles menu drop down
$('.dropdown-menu').find('form').click(function (e) {
    e.stopPropagation();
});
});
</script>
<script>

var pieData = [
{
    value: 30,
    color: "#F38630"
},
{
    value: 50,
    color: "#E0E4CC"
},
{
    value: 100,
    color: "#69D2E7"
}

];

var myPie = new Chart(document.getElementById("pie-chart").getContext("2d")).Pie(pieData);

var barChartData = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
    {
        fillColor: "rgba(220,220,220,0.5)",
        strokeColor: "rgba(220,220,220,1)",
        data: [65, 59, 90, 81, 56, 55, 40]
    },
    {
        fillColor: "rgba(151,187,205,0.5)",
        strokeColor: "rgba(151,187,205,1)",
        data: [28, 48, 40, 19, 96, 27, 100]
    }
    ]

}

var myLine = new Chart(document.getElementById("bar-chart").getContext("2d")).Bar(barChartData);
var myLine = new Chart(document.getElementById("bar-chart1").getContext("2d")).Bar(barChartData);
var myLine = new Chart(document.getElementById("bar-chart2").getContext("2d")).Bar(barChartData);
var myLine = new Chart(document.getElementById("bar-chart3").getContext("2d")).Bar(barChartData);

</script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<!-- use jssor.slider.mini.js (39KB) or jssor.sliderc.mini.js (31KB, with caption, no slideshow) or jssor.sliders.mini.js (26KB, no caption, no slideshow) instead for release -->
<!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->

<script type="text/javascript" src="js/jssor.core.js"></script>
<script type="text/javascript" src="js/jssor.utils.js"></script>
<script type="text/javascript" src="js/jssor.slider.js"></script>
<script>
jQuery(document).ready(function ($) {

    var _CaptionTransitions = [];
    _CaptionTransitions["L"] = { $Duration: 900, $FlyDirection: 1, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $ScaleHorizontal: 0.6, $Opacity: 2 };
    _CaptionTransitions["R"] = { $Duration: 900, $FlyDirection: 2, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $ScaleHorizontal: 0.6, $Opacity: 2 };
    _CaptionTransitions["T"] = { $Duration: 900, $FlyDirection: 4, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $ScaleVertical: 0.6, $Opacity: 2 };
    _CaptionTransitions["B"] = { $Duration: 900, $FlyDirection: 8, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $ScaleVertical: 0.6, $Opacity: 2 };
    _CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
    _CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
    _CaptionTransitions["RTT|2"] = { $Duration: 900, $Zoom: 3, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5} };
    _CaptionTransitions["RTTL|BR"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $FlyDirection: 10, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $ScaleHorizontal: 0.6, $ScaleVertical: 0.6, $Opacity: 2, $Round: { $Rotate: 0.8} };
    _CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 15, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
    _CaptionTransitions["MCLIP|L"] = { $Duration: 900, $Clip: 1, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
    _CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };

    var options = {
$FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actuall size, default value is 0
$AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
$AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
$PauseOnHover: 3,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 3

$ArrowKeyNavigation: true,                    //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
$SlideEasing: $JssorEasing$.$EaseOutQuart,
$SlideDuration: 1200,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
$MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
//$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
//$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
$SlideSpacing: 0,                           //[Optional] Space between each slide in pixels, default value is 0
$DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
$ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
$UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, direction navigator container, thumbnail navigator container etc).
$PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, default value is 1
$DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

$CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
$Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
$CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
$PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
$PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
},

$NavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
$Class: $JssorNavigator$,                       //[Required] Class to create navigator instance
$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
$AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
$Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
$Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
$SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
$SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
$Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
},

$DirectionNavigatorOptions: {                       //[Optional] Options to specify and enable direction navigator or not
$Class: $JssorDirectionNavigator$,              //[Requried] Class to create direction navigator instance
$ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
$AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
$Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
}
};

var jssor_slider1 = new $JssorSlider$("slider1_container", options);

//responsive code begin
//you can remove responsive code if you don't want the slider scales while window resizes
function ScaleSlider() {
    var bodyWidth = document.body.clientWidth;
    if (bodyWidth)
        jssor_slider1.$SetScaleWidth(Math.min(bodyWidth, 1920));
    else
        window.setTimeout(ScaleSlider, 30);
}

ScaleSlider();

if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
    $(window).bind('resize', ScaleSlider);
}
//responsive code end
});
</script>
@show
</body>
</html>