@extends('panel.dashboard')
@section('content')


			<div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="year-calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>     





            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Registrar cita</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                    
                                        <hr>
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Buscar Paciente</button>
                                        <div class="row p-t-20">
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nombre</label>
                                                    <input type="text" id="firstName" class="form-control">
                                                     </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Apellidos </label>
                                                    <input type="text" id="lastName" class="form-control form-control-danger" >
                                             </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Malestar </label>
                                                    <input type="text" id="lastName" class="form-control form-control-danger" >
                                             </div>
                                            </div>

                                            <!--/span-->
                                        </div>
                                        
                                        </div>
                                        

                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Hora de cita</label>
                                            <div class="col-md-9">
                                                <select class="form-control" multiple="">
                                                    <optgroup label="AM">
                                                        <option>9:00 - 10:30</option>
                                                    </optgroup>
                                                    <optgroup label="AM">
                                                        <option>10:30 - 12:00</option>
                                                    </optgroup>
                                                    <optgroup label="PM">
                                                        <option>12:00 - 1:30</option>
                                                    </optgroup>
                                                    <optgroup label="PM">
                                                        <option>3:00 - 4:30</option>
                                                    </optgroup>
                                                    <optgroup label="PM">
                                                        <option>4:30 - 6:00</option>
                                                    </optgroup>
                                                    <optgroup label="PM">
                                                        <option>6:00 - 7:30</option>
                                                    </optgroup>
                                                    <optgroup label="PM">
                                                        <option>7:30 - 9:00</option>
                                                    </optgroup>
                                                    <optgroup label="PM">
                                                        <option>9:00 - 10:30</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Medico</label>
                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                        <option value="Category 1">Henry Chavez marin</option>
                                                        <option value="Category 2">Nery Olivera sanchez</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Registrar</button>
                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>     
@stop

