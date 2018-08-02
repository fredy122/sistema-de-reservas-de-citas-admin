@extends('panel.dashboard')
@section('content')



<?php $message=Session::get('message') ?>

@if($message == 'save')
    <div class="alert alert-primary">
        Usuario creado satisfactoriamente...
    </div>
@endif
                  
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Lista de Usuarios</h4>
            <div class="table-responsive m-t-40">
                <table id="myTable" class="table table-bordered table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Correo</th>
                                <th>Celular</th>
                                <th>Dni</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($usuarios as $usuario) {
                                                    
                                echo "<tr>";
                                echo "<td>".$usuario->nombre."</td>";
                                echo "<td>".$usuario->apellidos."</td>";
                                echo "<td>".$usuario->email."</td>";
                                echo "<td>".$usuario->celular."</td>";
                                echo "<td>".$usuario->dni."</td>";
                                echo "<td>
                                <input href='{{ route('panel.ver', $usuario->id)}}' class='btn btn-success btn-xs m-b-10 m-l-5' type='button'  value='Ver'>

                                <input href='{{ route('panel.editar', $usuario->id)}}' class='btn btn-info btn-xs m-b-10 m-l-5' type='button'  value='editar'>

                                <input class='btn btn-danger btn-flat btn-addon btn-xs m-b-10' type='button' value='Eliminar'>

                                      </td>";

                                echo "</tr>";

                                                }
                                                
                                                
                        ?>
                        <div id="example23_filter" class="dataTables_filter"><label>Buscar:
                            <input type="search" class="" placeholder="" aria-controls="example23"></label>
                        </div>
                                         
                                         
                </table>
                                    
                                        
                {!!$usuarios->render()!!}  
                                        
                                        
                                
                                     
            </div>
        </div>
    </div>




@stop