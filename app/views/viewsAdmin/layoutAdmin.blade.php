<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta charset="utf-8">
    <title>@yield('titulo')</title>
    @section('head')
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<link href="css/pages/reports.css" rel="stylesheet">
<link href="css/pages/plans.css" rel="stylesheet"> 
<link href="css/looking.css" rel="stylesheet"> 
 <link rel="shortcut icon" href="ico/logoacunica.ico">

    @show

</head>
<body>
@section('header')
<div class="navbar-fixed-top" >  

                    <div class="navbar-inner navbar-static-top" role="navigation">
                        <div class="container">
                            <div class="navbar-header">
                                <span style="color:white; font-size:20px;" class="brand"> <img src="img/logoacunica.jpg" height="40" width="30" alt=""/> COMEDOR UNIVERSITARIO</span>
                                <br>
                                 <button  class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse1"><span class="btn btn-white">LOG OUT</span></button>
                                
                                 <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="btn btn-white">MENU</span></button>
                                
                          </div>                           
                                                        
                <div class="nav-collapse1">
    
          
             <ul class="nav pull-right">     
          <li class="dropdown"><a href="{{ url('/logout') }}"><i
                            class="icon-off"></i> logout</a>
           
          </li>

        </ul>
         <ul class="nav pull-right"> 
          <li>
            <a href="#"> {{ Auth::user()-> nombre; }}</a>           
          </li> 
           </ul>  
         <ul class="nav pull-right"> 
      
     <li ><img src="img/imgcom/{{ Auth::user()->codigo_est;}}.jpg" height="40" width="40" alt=""/>
          </li>
            </ul> 
      </div>
    </div>
 </div>
</div>
@show
@section('menu')

@show

@section('body')
     
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
        <!-- /span12 --> 
         </div>
         </div>
      </div>

      <!-- /row --> 


    </div>
    <!-- /container --> 

  </div>
  <!-- /footer-inner --> 
</div>        
@show

@section('script')
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
 <script src="js/search.js"></script>
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
  <script>
$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});
  </script> 
  <style type="text/css">
  .btn-outlined {
    border-radius: 0;
    -webkit-transition: all 0.3s;
       -moz-transition: all 0.3s;
            transition: all 0.3s;
}
.btn-outlined.btn-primary {
    background: none;
    border: 3px solid #428bca;
    color: #428bca;
}
.btn-outlined.btn-primary:hover,
.btn-outlined.btn-primary:active {
    color: #FFF;
    background: #428bca;
    border-color: #428bca:
}

.btn-outlined.btn-success {
    background: none;
    border: 3px solid #5cb85c;
    color: #5cb85c;
}
.btn-outlined.btn-success:hover,
.btn-outlined.btn-success:active {
    color: #FFF;
    background: #47a447;
}

.btn-outlined.btn-info {
    background: none;
    border: 3px solid #5bc0de;
    color: #5bc0de;
}
.btn-outlined.btn-info:hover,
.btn-outlined.btn-info:active {
    color: #FFF;
    background: #39b3d7;
}

.btn-outlined.btn-warning {
    background:#ed9c28;
    border: 3px solid #f0ad4e;
    color: white;
}
.btn-outlined.btn-warning:hover,
.btn-outlined.btn-warning:active {
    color: #FFF;
    background: #f0ad4e;
}

.btn-outlined.btn-danger {
    background: none;
    border: 3px solid #d9534f;
    color: #d9534f;
}
.btn-outlined.btn-danger:hover,
.btn-outlined.btn-danger:active {
    color: #FFF;
    background: #d2322d;
}
  </style>
@show
</body>
</html>