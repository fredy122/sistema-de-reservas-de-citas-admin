<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon.png">
    <title>Centro Odontologico Expertise</title>
    <!-- Bootstrap Core CSS -->
    <link href="/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/css/helper.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/flexslider.css">
    <link rel="stylesheet" href="/css/jquery.fancybox.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="/css/font-icon.css">
    <link rel="stylesheet" href="/css/animate.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>

<section class="banner" role="banner">
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" ><span><img src="/images/logo-text.png" alt="homepage" class="dark-logo" /></span></a>
      <nav class="navigation" role="navigation">
        <li>IDENTIFICADOR|PANEL DE ADMINISTRADOR </li>

      </nav>
  </header>
    
</section>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>


    


    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                                <h4>Recupera contraseña</h4>


                                <form method="POST" action="{{route('login')}}">

                                    {{ csrf_field() }}
                                    
                                    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                        <label>DNI</label>
                                        <input type="email" name="email" value="{{ old('email')}}" class="form-control" placeholder="Ingresa su DNI">
                                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    
                                    <button class="btn btn-success btn-outline m-b-10 m-l-5">Enviar</button>
                                    <label class="pull-right">
                                                <a href="{{ url('/') }}">Regresar</a>
                                            </label>

                                </form>

                                @if (session()->has('flash'))
    
                                <div class="alert alert-danger">{{ session('flash')}}</div>
    
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="/js/scripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
    <script src="/js/bootstrap.min.js"></script> 
    <script src="/js/jquery.flexslider-min.js"></script> 
    <script src="/js/jquery.fancybox.pack.js"></script>  
    <script src="/js/modernizr.js"></script> 
    <script src="/js/main.js"></script> 
    <script type="text/javascript" src="/js/jquery.contact.js"></script> 
    <script type="text/javascript" src="/js/jquery.devrama.slider.min-0.9.4.js"></script>
    

</body>

</html>