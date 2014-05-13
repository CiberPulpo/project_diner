@extends('viewsHome/layoutHome')

@section('titulo')
Inicio
@stop

@section('header')
@parent

<style type="text/css">
.btn {
display: inline-block;
padding: 9px 12px;
padding-top: 7px;
margin-bottom: 0;
font-size: 14px;
line-height: 20px;
color: #5e5e5e;
text-align: center;
vertical-align: middle;
cursor: pointer;
background-color: #d1dade;
-webkit-border-radius: 3px;
-webkit-border-radius: 3px;
-webkit-border-radius: 3px;
background-image: none !important;
border: none;
text-shadow: none;
box-shadow: none;
transition: all 0.12s linear 0s !important;
font: 14px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;
}
.btn-cons {
margin-right: 5px;
min-width: 120px;
margin-bottom: 8px;
}
.btn-default {
color: #333;
background-color: #fff;
border-color: #ccc;
}
.btn-primary {
color: #fff;
background-color: #428bca;
border-color: #357ebd;
}
.btn-success {
color: #fff;
background-color: #5cb85c;
border-color: #4cae4c;
}
.btn-info {
color: #fff;
background-color: #5bc0de;
border-color: #46b8da;
}
.btn-warning {
color: #fff;
background-color: #f0ad4e;
border-color: #eea236;
}
.btn-danger {
color: #fff;
background-color: #d9534f;
border-color: #d43f3a;
}
.btn-white {
color: #5e5e5e;
background-color: #fff;
border: 1px solid #e5e9ec;
}
.btn-link, .btn-link:active, .btn-link[disabled], fieldset[disabled] .btn-link {
background-color: transparent;
-webkit-box-shadow: none;
box-shadow: none;
}
.btn-link, .btn-link:hover, .btn-link:focus, .btn-link:active {
border-color: transparent;
}
.btn-link {
color: #5e5e5e;
background-color: transparent;
border: none;
}
.btn-link, .btn-link:hover, .btn-link:focus, .btn-link:active {
border-color: transparent;
}
.btn-default, .btn-primary, .btn-success, .btn-info, .btn-warning, .btn-danger {
text-shadow: 0 -1px 0 rgba(0,0,0,0.2);
-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.15),0 1px 1px rgba(0,0,0,0.075);
box-shadow: inset 0 1px 0 rgba(255,255,255,0.15),0 1px 1px rgba(0,0,0,0.075);
}

</style>
@stop

@section('body')
@parent
<div class="navbar" style="padding:25px">
	<div class="main-inner">
		<h3>SISTEMA DE CONTROL COMENSAL</h3>
		<p align="justify">Para acceder al sistema es necesario que usted sea alumno regular de la universidad con matrícula vigente. Su usuario es su código de alumno y la contraseña cuando accede por primera vez es acunica</p>
		<br><br>
	</div>
</div>
@stop

@section('footer')
@parent

@stop