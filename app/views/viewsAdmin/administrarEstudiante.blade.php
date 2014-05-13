@extends('viewsAdmin/layoutAdmin')

@section('titulo')
admin
@stop

@section('header')
@parent


@stop
@section('menu')

<div class="navbar-fixed-top" >
<div class="subnavbar">
    <div class="navbar-collapse collapse">
  <div class="subnavbar-inner">
    <div class="container" style="padding:6px">     
      <ul class="mainnav" >
         Bienvenido administrador {{ Auth::user()-> nombre; }}
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
</div>
</div>
@stop

@section('body')
@parent
 <div class="widget" >            
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="shortcuts"> 
<a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-table"></i>
<span class="shortcut-label">Sistema Acunica</span> </a>
<a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-group"></i><span class="shortcut-label">Estudiante temporal</span> </a>
<a href="{{ url('/crud') }}" class="shortcut"><i class="shortcut-icon icon-book"></i> <span class="shortcut-label">Datos Comensales</span> </a>
<a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-shopping-cart"></i><span class="shortcut-label">Venta de Bonos</span> </a>
<a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-bar-chart"></i><span class="shortcut-label">Generar Reportes</span> </a>
<a href="javascript:;" class="shortcut"><i class="shortcut-icon  icon-calendar"></i><span class="shortcut-label">Asistencia de Comensal</span></a>
<a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-edit"></i><span class="shortcut-label">Registrar Asistencia</span> </a>
<a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-eye-close"></i><span class="shortcut-label">Infraccion comensal</span></a>
<a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-random"></i><span class="shortcut-label">Actividades</span></a>


          </div>
              <!-- /shortcuts --> 
    </div>
            <!-- /widget-content --> 
          </div>
@stop

@section('footer')
@parent

@stop