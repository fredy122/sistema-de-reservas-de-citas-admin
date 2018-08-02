@extends('panel.dashboard')
@section('content')


<div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Cita</h4>
                                <!-- Nav tabs -->
                                <div class="vtabs ">
                                    <ul class="nav nav-tabs tabs-vertical" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home9" role="tab"><span><i class="ti-home"></i></span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile9" role="tab"><span><i class="ti-user"></i></span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages9" role="tab"><span><i class="ti-email"></i></span></a> </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home9" role="tabpanel">
                                            <div class="p-20">
                                                <h5>Dr. Henry Chavez marin</h5>
                                                <h6>Hora:4:30 PM</h6>
                                                <p>Fecha: 23/07/2018</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane  p-20" id="profile9" role="tabpanel">
                                        	<h5>Paciente: Fredy Alarcon Ordoñez</h5>
                                        	<h6>Confirmo: Si</h6>
                                        	<p>Pago: 10.00 soles</p>
                                        </div>
                                        <div class="tab-pane p-20" id="messages9" role="tabpanel"><h5>Malestar:</h5>
                                        <h6>Siento un dolor en las ensias</h6></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   

                      
@stop

