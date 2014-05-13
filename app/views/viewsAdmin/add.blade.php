@extends('viewsAdmin/layoutAdmin')

@section('titulo')
agregar
@stop

@section('header')
@parent


@stop
@section('menu')
<div class="navbar-fixed-top" > 
<div class="subnavbar">
    <div class="navbar-collapse collapse">
  <div class="subnavbar-inner">
    <div class="container" id="big_stats1">     
      <ul class="nav" >
       
        <li><a  href="{{ url('/crud') }}"> <i class="icon-user-md"></i>Comensal</a>          
        </li>

        <li class="dropdown" ><a href="{{ url('/permiso') }}"> <i class="icon-edit"></i>Permiso</a>          
        </li>         
       
        <li class="dropdown"><a href="{{ url('/reserva') }}"> <i class="icon-key"></i>Reserva</a>          
        </li>        
      
       <li class="dropdown"><a  href="{{ url('/sancion') }}"> <i class="icon-credit-card"></i> Sanción</a>          
        </li>  
                     
        <li></li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
</div></div><br>
@stop

@section('body')
@parent

<div class="row">

    <div class="col-md-4 col-md-offset-1" style="float:right; width: 600px;">
      <br><br><br>
  <div style="width:200px;"><legend>Fotografia</legend></div>
  
          <br>
  <img src="img/imgcom/img.JPG">
 <br><br>
   <input type="file" value="seleccionar">
   
  </div>
 
    <div class="col-md-4 col-md-offset-1">
<div class="btn-group">
                        <a  href="{{ url('/crud') }}"><button class="btn btn-primary">
                         <i class="icon-arrow-left"></i>
                        </button></a>                         
                    </div> <br><br>
      <form class="form-horizontal" role="form">

        <fieldset>

          <!-- Form Name -->
          <legend>Ingrese Datos del Estudiante</legend>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Codigo</label>
            <div class="col-sm-4">
              <input type="text" placeholder="Codigo" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Nombres</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Nombres" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Apellido Paterno</label>

            <div class="col-sm-10">
              <input type="text" placeholder="Apellido Paterno" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Apellido Materno</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Apellidos" class="form-control">
            </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Facultad</label>
            <div class="col-sm-4 ">
              <select class="input-block-level">
                    <option>Ing. Sistemas</option>
                     <option>Administracion</option>
                    <option>Arqueologia</option>
                    <option>Derecho</option>
                    <option>Contabilidad</option>
                      <option>Educacion</option>
                    <option>Arquitectura</option>
                    <option>Turismmo</option>
                  </select>
            </div>

            <label class="col-sm-2 control-label" for="textinput">Escuela</label>
            <div class="col-sm-4">
             <select class="input-block-level">
                  <option>Ing. Sistemas</option>
                     <option>Administracion</option>
                    <option>Arqueologia</option>
                    <option>Derecho</option>
                    <option>Contabilidad</option>
                      <option>Educacion</option>
                    <option>Arquitectura</option>
                    <option>Turismmo</option>
                  </select>
            </div>
          </div>


          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">DNI</label>
            <div class="col-sm-10">
              <input type="text" placeholder="DNI" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Sexo</label>
            <div class="col-sm-10">
              <span class="button-checkbox">
        <button type="button" class="btn" data-color="">H</button>
        <input type="checkbox" class="hidden" />
      </span>
     <span class="button-checkbox">
        <button type="button" class="btn" data-color="">M</button>
        <input type="checkbox" class="hidden" />
    </span> 
            </div>
             
          </div>
           <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Direccion</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Direccion" class="form-control">
            </div>
          </div>
           <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">N° bono</label>
            <div class="col-sm-4">
              <input type="text" placeholder="N° bono" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Fecha Nac.</label>
            <div class="col-sm-3">
              <input type="text" placeholder="Dia" class="form-control">
            </div>
            
            <div class="col-sm-3">
              <input type="text" placeholder="Mes" class="form-control">
            </div>
         
            <div class="col-sm-3">
              <input type="text" placeholder="Año" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Año de Ingreso</label>
            <div class="col-sm-4">
              <input type="text" placeholder="Año de Ingreso" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Email</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Correo electronico" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="submit" class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form><br><br>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
@stop

@section('footer')
@parent

@stop