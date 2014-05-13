@extends('viewsAdmin/layoutAdmin')

@section('titulo')
crud
@stop

@section('header')
@parent

@stop

@section('menu')
<div class="navbar-fixed-top" > 
<div class="subnavbar">
    <div class="navbar-collapse collapse">
  <div class="subnavbar-inner">
    <div class="container">     
      <ul class="nav" >
       
        <li class="active"><a  href="#"> <i class="icon-user-md"></i>Comensal</a>          
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
<div class="container">
      <div class="row">
        <div class="btn-group">
                        <a  href="{{ url('/atras') }}"><button class="btn btn-primary">
                         <i class="icon-arrow-left"></i>
                        </button></a>                         
                    </div> <br><br>  

            <div class="col-md-3">
                <form action="#" method="get">
                     <div class="input-group">
                        <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                        <input class="form-control" id="system-search" name="q" placeholder="Buscar.." required>
                        <span class="input-group-btn">
                            <button  type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>
                        </span>
                    </div>
                </form>

            </div>
            
        <div class="col-md-9">

            <div class="col-lg-3 pull-right">        
            <p><a href="{{ url('/add') }}" class="btn btn-outlined btn-block btn-warning"><i class="icon-plus"></i> Agregar Comensal</a></p>            
            </div>
          
              <table class="table-list-search table table-hover table-bordered">
            <thead>
              <tr>
                <th witdh="400px;">N° bono</th>
                <th witdh="700px;">Nombres</th>
                <th class="td-actions" ></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>456</td>
                <td>Evelyn de sotomayor</td>
                <td class="td-actions" style="padding-left:70px;">
                 <button type="button" class="btn btn-labeled btn-primary">
                <span class="btn-label"><i class="icon-eye-open icon-white"></i></span>&nbsp;&nbsp;&nbsp;ver&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                <button type="button" class="btn btn-labeled btn-primary">
                <span class="btn-label"><i class="icon-pencil icon-white"></i></span>modificar</button>
                <button type="button" class="btn btn-labeled btn-danger">
                <span class="btn-label"><i class="glyphicon glyphicon-trash"></i></span>eliminar&nbsp;&nbsp;</button>
                </td>
              </tr>
              <tr>
                <td>666</td>
                <td>Yessenia Gutierrez</td>
                <td class="td-actions" style="padding-left:70px;">
                  <button type="button" class="btn btn-labeled btn-primary">
                <span class="btn-label"><i class="icon-eye-open icon-white"></i></span>&nbsp;&nbsp;&nbsp;ver&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                <button type="button" class="btn btn-labeled btn-primary">
                <span class="btn-label"><i class="icon-pencil icon-white"></i></span>modificar</button>
                <button type="button" class="btn btn-labeled btn-danger">
                <span class="btn-label"><i class="glyphicon glyphicon-trash"></i></span>eliminar&nbsp;&nbsp;</button>
                </td>
              </tr>
              <tr>
                <td>667</td>
                <td>pool Almeyda Levano</td>
                <td class="td-actions" style="padding-left:70px;">
                  <button type="button" class="btn btn-labeled btn-primary">
                <span class="btn-label"><i class="icon-eye-open icon-white"></i></span>&nbsp;&nbsp;&nbsp;ver&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                <button type="button" class="btn btn-labeled btn-primary">
                <span class="btn-label"><i class="icon-pencil icon-white"></i></span>modificar</button>
                <button type="button" class="btn btn-labeled btn-danger">
                <span class="btn-label"><i class="glyphicon glyphicon-trash"></i></span>eliminar&nbsp;&nbsp;</button>
                </td>
              </tr>
              <tr>
                <td>546</td>
                <td>jhon Castro</td>
                <td class="td-actions" style="padding-left:70px;">
                  <button type="button" class="btn btn-labeled btn-primary">
                <span class="btn-label"><i class="icon-eye-open icon-white"></i></span>&nbsp;&nbsp;&nbsp;ver&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                <button type="button" class="btn btn-labeled btn-primary">
                <span class="btn-label"><i class="icon-pencil icon-white"></i></span>modificar</button>
                <button type="button" class="btn btn-labeled btn-danger">
                <span class="btn-label"><i class="glyphicon glyphicon-trash"></i></span>eliminar&nbsp;&nbsp;</button>
                </td>
              </tr>
              <tr>
                <td>678</td>
                <td>Samuel Sotomayor</td>
                <td class="td-actions" style="padding-left:70px;">
                  <button type="button" class="btn btn-labeled btn-primary">
                <span class="btn-label"><i class="icon-eye-open icon-white"></i></span>&nbsp;&nbsp;&nbsp;ver&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                <button type="button" class="btn btn-labeled btn-primary">
                <span class="btn-label"><i class="icon-pencil icon-white"></i></span>modificar</button>
                <button type="button" class="btn btn-labeled btn-danger">
                <span class="btn-label"><i class="glyphicon glyphicon-trash"></i></span>eliminar&nbsp;&nbsp;</button>
                </td>
              </tr>
              <tr>
                <td>768</td>
                <td>Kevin Morales Merino</td>
                <td class="td-actions" style="padding-left:70px;">
                   <button type="button" class="btn btn-labeled btn-primary">
                <span class="btn-label"><i class="icon-eye-open icon-white"></i></span>&nbsp;&nbsp;&nbsp;ver&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                <button type="button" class="btn btn-labeled btn-primary">
                <span class="btn-label"><i class="icon-pencil icon-white"></i></span>modificar</button>
                <button type="button" class="btn btn-labeled btn-danger">
                <span class="btn-label"><i class="glyphicon glyphicon-trash"></i></span>eliminar&nbsp;&nbsp;</button>
                </td>
              </tr>
               <tr>
                <td>763</td>
                <td>Martin Saravia Belleza</td>
                <td class="td-actions" style="padding-left:70px;">
                   <button type="button" class="btn btn-labeled btn-primary">
                <span class="btn-label"><i class="icon-eye-open icon-white"></i></span>&nbsp;&nbsp;&nbsp;ver&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                <button type="button" class="btn btn-labeled btn-primary">
                <span class="btn-label"><i class="icon-pencil icon-white"></i></span>modificar</button>
                <button type="button" class="btn btn-labeled btn-danger">
                <span class="btn-label"><i class="glyphicon glyphicon-trash"></i></span>eliminar&nbsp;&nbsp;</button>
                </td>
              </tr>
               <tr>
                <td>634</td>
                <td>Bruno Melgar</td>
                <td class="td-actions" style="padding-left:70px;">
                   <button type="button" class="btn btn-labeled btn-primary">
                <span class="btn-label"><i class="icon-eye-open icon-white"></i></span>&nbsp;&nbsp;&nbsp;ver&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                <button type="button" class="btn btn-labeled btn-primary">
                <span class="btn-label"><i class="icon-pencil icon-white"></i></span>modificar</button>
                <button type="button" class="btn btn-labeled btn-danger">
                <span class="btn-label"><i class="glyphicon glyphicon-trash"></i></span>eliminar&nbsp;&nbsp;</button>
                </td>
              </tr>
              </tbody>
            </table>
              <div class="col-md-9">
                            <ul class="pagination pagination-sm pull-left">
                                <li class="disabled"><a href="javascript:void(0)">«</a></li>
                                <li class="active"><a href="javascript:void(0)">1 <span class="sr-only">(Pagina)</span></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">8</a></li>
                                <li><a href="#">9</a></li>
                                <li><a href="#">10</a></li>
                                <li><a href="#">11</a></li>
                                <li><a href="#">12</a></li>
                                <li><a href="#">13</a></li>
                                <li><a href="javascript:void(0)">»</a></li>
                            </ul>
                        </div>  
        </div>
      </div>
    </div><br><br><br><br>

@stop

@section('footer')
@parent

@stop