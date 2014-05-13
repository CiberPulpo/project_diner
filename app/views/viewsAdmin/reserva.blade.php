@extends('viewsAdmin/layoutAdmin')

@section('titulo')
permiso
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
       
        <li class="active"><a href="#"> <i class="icon-key"></i>Reserva</a>          
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
<div class="container">
      <div class="row">
        <div class="btn-group">
                        <a  href="{{ url('/atras') }}"><button class="btn btn-primary">
                         <i class="icon-arrow-left"></i>
                        </button></a>                         
                    </div> <br><br>  
                     <div class="form-group">
            <label class="col-sm-1 control-label" for="textinput">filtrar por</label>
            <div class="col-sm-2 ">
              <select class="input-block-level">
                    <option>N° bono</option>
                     <option>Nombre</option>
                    <option>Apellido</option>
                    <option>Facultad</option>
                    <option>DNI</option>
                     
                  </select>
            </div>
             </div><br><br><br>
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
             <table class="table-list-search table table-hover table-bordered" >
                <thead >
                  <tr>
                    <th  width="150px;" >Bono</th>
                    <th  width="400px;">Nombre</th>                    
                     <th  width="400px;">Apellido</th>  
                        <th  width="400px;">Facultad</th>
                   
                  </tr>
                </thead>
                <tbody>
                        <tr>
                            
                             <td >582</td>
                            <td>Kevin</td>                           
                           <td>Morales Merino</td>
                           <td>Ing. sistemas</td>
                            
                            
                        </tr>
                        <tr>
                            <td>666</td>
                            <td>Samuel </td>                            
                            <td>Sotomayor</td>
                           <td>Ing. sistemas</td>
                           
                             
                        </tr>
                        <tr>
                            <td>675</td>
                            <td>jhon </td>                            
                            <td>Castro</td>
                           <td>Ing. sistemas</td>
                            
                           
                        </tr>
                        <tr>
                            <td>672</td>
                            <td>pool </td>                           
                            <td>Almeyda Levano</td>
                           <td>Ing. sistemas</td>
                            
                           
                        </tr>
                       
                        <tr>
                            <td>669</td>
                            <td>Evelyn</td>                           
                            <td> de sotomayor</td>
                           <td>Ing. sistemas</td>
                            
                             
                        </tr>
                        
                    </tbody>
                   
              </table>
             <table class="table">
               <thead >
                  <tr>
                     <th width="400px;"></th>
                    <th  width="400px;"></th>                    
                     <th  width="150px;"><span class="input-group-btn">
           
       </span>

<a href="#success" data-toggle="modal"><button  type="submit" class="btn btn-primary"><i class="icon icon-save"></i> Guardar</button></a>
     </th>
                     
                   
                  </tr>
                </thead>

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
    </div>
@stop

@section('footer')
@parent

@stop