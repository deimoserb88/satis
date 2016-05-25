@extends('layouts.app')


@section('content')
	<div class="container" style="width: 980px;">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">Ayuda para el llenado de la encuesta</h3>
			</div>
			<div class="panel-body">
				<h5>INSTRUCCIONES</h5>
				<p class="text-justify">
				Lee cuidadosamente cada uno de los apartados y responde a los enunciados se&ntilde;alando 
    			la opci&oacute;n que mejor refleja tu grado de satisfacci&oacute;n. Tienes 
			    5 opciones de respuesta y s&oacute;lo puedes marcar una por cada oraci&oacute;n 
			    <i>(ejemplo 1)</i>. En el apartado de infraestructura y servicios universitarios 
			    tendr&aacute;s que contestar en dos columnas, la de frecuencia y la de satisfacci&oacute;n, 
			    es decir, que tanto usas el servicio y que tan satisfecho est&aacute;s con 
			    &eacute;l <i>(ejemplo 2)</i>.</p>
			    <div class="row">
				    <div class="col-md-3 col-md-offset-2">
						<b>Satisfacción</b>
						<ol>
							<li>-Muy satisfecho</li>
							<li>-Satisfecho</li>
							<li>-Neutral</li>
							<li>-Insatisfecho</li>
							<li>-Muy insatisfecho</li>
						</ol>
				    </div>
				    <div class="col-md-3 col-md-offset-2">
						<b>Importancia</b>
						<ol>
							<li>-Muy importante</li>
							<li>-Importente</li>
							<li>-Neutral</li>
							<li>-Poco importante</li>
							<li>-Nada importante</li>
						</ol>				    	
				    </div>
			    </div>
			    <hr>
			    <h5><u>Ejemplo 1</u></h5>
			    <table class="table table-striped table-hover">
			    	<thead>
			    	<tr>
			    		<td>&nbsp;</td>
			    		<td class="text-center" colspan="2"><img src="{{ url('images/ms.png') }}"></td>			    		
			    		<td>&nbsp;</td>			    		
			    		<td class="text-center" colspan="2"><img src="{{ url('images/mis.png') }}"></td>
			    	</tr>
			    	<tr class="bg-primary">
			    		<th>Qué tan satisfecho estas con los siguioentes aspectos que ofrece tu carrera</th><th class="text-center">1</th><th class="text-center">2</th><th class="text-center">3</th><th class="text-center">4</th><th class="text-center">5</th>
			    	</tr>
			    	</thead>
			    	<tbody>
			    	<tr>
			    		<td>Los contenidos teóricos de las materias</td>
			    		<td class="text-center"><input type="radio" disabled="disabled"></td>
			    		<td class="text-center"><input type="radio" disabled="disabled" checked="checked"></td>
			    		<td class="text-center"><input type="radio" disabled="disabled"></td>
			    		<td class="text-center"><input type="radio" disabled="disabled"></td>
			    		<td class="text-center"><input type="radio" disabled="disabled"></td>
			    	</tr>
			    	</tbody>
			    </table>
			</div>
		</div>
	</div>
@stop
