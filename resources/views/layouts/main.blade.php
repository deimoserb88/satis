<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>UCol</title>
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ url('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap/dist/css/bootstrap-theme.min.css') }}" rel="stylesheet"> 	
 	
 	@yield('estilos') <!--Para agregar estilos propios de cada modulo-->

    <style>
        body {
            font-family: 'Lato';                        
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>    
</head>
<body>
   	<div id="estructura">
        <header id="p-header">
			<div id="p-top">
				<div class="p-encabezado">
					<div class="linkUcol">
						<a class="escudo" href="http://www.ucol.mx/">&nbsp;</a>
						<a class="nombre" href="http://www.ucol.mx/">&nbsp;</a>
					</div>
					<div class="TituloDep">Direcci&oacute;n General de Vinculaci&oacute;n con Egresados</div>
					<ul class="hidden-mobile" id="menu-header">
						<form action="http://www.ucol.mx/conocenos/buscar.htm" id="search-form" class="">
							<div class="input-append pull-right">
							        <input type="hidden" value="008220538144971964399:mwxy_s7mt4u" name="cx">
									<input type="hidden" value="FORID:10" name="cof"> 
									<input type="hidden" value="UTF-8" name="ie"> 
	                                <input id="q" class="search" name="q" type="text" placeholder="Buscar en ucol..." size="16">
									<input name="more" class="botonbuscar" value="" type="submit">
							</div>
						</form>
						<li><a href="http://www.ucol.mx/alumnos/" target="_blank">Alumnos</a></li>
						<li><a href="http://www.ucol.mx/trabajadores/" target="_blank">Trabajadores</a></li>
					</ul>   
				</div><!--encabezdo-->
			</div><!--top-->
	    </header>

    @yield('content')

 <footer id="p-footer"><!-- footer -->
			<div class="inner">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 mapa">
							<div class="address pull-right">
								<ul>
									<li><i class="icon-address"></i><strong>Direcci&oacute;n:</strong> Av. Universidad No. 333, Las V&iacute;boras; CP 28040 Colima, Colima, M&eacute;xico</li>
								   <!--<li><i class="icon-email"></i><a href="/portal-web/Directorio.htm">Directorio</a></li>
									<li><i class="icon-map"></i><a href="/conocenos/mapa.htm">Mapa del sitio</a></li>-->
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="p-copyright">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-6 col-xs-6 izquierda">
								<a href="http://www.sep.gob.mx/" target="_blank"><img src="http://www.ucol.mx/cms/img/LogoSEP1.png"></a>
								<a href="http://www.anuies.mx/" target="_blank"><img src="http://www.ucol.mx/cms/img/anuies.png"></a>
								<a href="http://www.unesco.org/new/es/" target="_blank"><img src="http://www.ucol.mx/cms/img/unesco.png"></a>
								<a href="http://www.cumex.org.mx/" target="_blank"><img src="http://www.ucol.mx/cms/img/consorcio.png"></a>
							</div>
							<div class="col-md-6 col-xs-6 derecha">
								<a href="http://www.federaciondeestudiantescolimenses.com/"target="_blank"><img src="http://www.ucol.mx/cms/img/LogoFEC.png"  width="81px" height="30px" ></a>					
								&nbsp;<a href="#" target="_blank"><img src="http://www.ucol.mx/cms/img/SUTUC.png"></a>	
								&nbsp;<a href="http://portal.ucol.mx/feuc/"  target="_blank"><img src="http://www.ucol.mx/cms/img/LogoFEUC.png"></a>
								<!-- &nbsp;<a href="http://www.fundacionucol.org/" target="_blank"><img src="/cms/img/fundacionUcol.png"></a> -->
							</div>
						</div>
						<div class="col-md-12 derechos">&copy; Derechos Reservados 2013-2016 Universidad de Colima</div>
					</div>
				</div>
			</div>   
		</footer>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-transition.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-alert.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-modal.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-tab.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-popover.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-button.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-collapse.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-carousel.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-typeahead.js"></script>	
    <script src="http://www.ucol.mx/cms/js/jquery.mobilemenu.js"></script>	
    <script src="http://www.ucol.mx/cms/js/jquery.liquidcarousel.js"></script>	
    <script src="http://www.ucol.mx/cms/js/jquery.slides.js"></script> 
    <script src="http://www.ucol.mx/cms/js/main.js"></script>
    <script src="http://www.ucol.mx/cms/js/custom.js"></script>

    @yield('scripts') <!--Para agregar scripts propios de cada modulo-->

</div> <!--estructura-->	
</body>
</html>