@extends('panel.dashboard')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-two">
                            <header>
                                <div class="avatar">
                                    <img src="https://randomuser.me/api/portraits/women/21.jpg" alt="Allison Walker" />
                                </div>
                            </header>

                            <h3>{{ auth()->user()->email}}</h3>
                                    
                            <div class="contacts">
                                <a href=""><i class="fa fa-plus"></i></a>
                                <a href=""><i class="fa fa-whatsapp"></i></a>
                                <a href=""><i class="fa fa-envelope"></i></a>
                                <div class="clear">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
@stop