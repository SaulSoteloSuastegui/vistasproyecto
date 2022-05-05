<?php require 'views/header.php'; ?>
<!--
	<link href="public/css/select2/select2.css" rel="stylesheet"/>
	<script src="public/js/select2/select2.js" defer></script>

    <link href="public/css/bootstrap-select/bootstrap-select.css" rel="stylesheet"/>
	<script src="public/js/bootstrap-select/bootstrap-select.js" defer></script>
    <script  type="text/javascript" src="<?php echo constant("URL"); ?>public/js/validarFormulario.js" defer></script>

	-->

<link href="<?php echo constant("URL"); ?>public/css/jquery.datetimepicker.min.css" rel="stylesheet">
<link href="<?php echo constant("URL"); ?>public/css/bootstrap-select/bootstrap-select.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo constant("URL"); ?>public/js/jquery.datetimepicker.full.js" defer></script>
</head>

<body>

	<input id="tipo_usuario" type="hidden" value="<?php echo $_SESSION['tipo_usuario']; ?>">
	<input id="nombre_usuario" type="hidden" value="<?php echo $_SESSION['nombre_usuario']; ?>">

	<input id="db_sala" type="hidden" value="<?php echo $this->audiencia->sala; ?>">
	<input id="db_delito" type="hidden" value="<?php echo $this->audiencia->delito; ?>">
	<input id="db_distrito" type="hidden" value="<?php echo $this->audiencia->distrito; ?>">
	<input id="db_asistente" type="hidden" value="<?php echo $this->audiencia->asistente; ?>">
	<input id="db_taudiencia" type="hidden" value="<?php echo $this->audiencia->tipoaudiencia; ?>">
	<input id="db_juez" type="hidden" value="<?php echo $this->audiencia->juez; ?>">
	<input id="db_tipo" type="hidden" value="<?php echo $this->audiencia->confidencialidad; ?>">
	<input id="db_hora" type="hidden" value="<?php echo $this->audiencia->hora; ?>">
	<input id="db_fecha" type="hidden" value="<?php echo $this->audiencia->fecha_c; ?>">
	<input id="db_encargado" type="hidden" value="<?php echo $this->audiencia->encargado; ?>">
	<input id="db_tipojuzgado" type="hidden" value="<?php echo $this->audiencia->tipojuzgado; ?>">

	<div class='jumbotron pt-3 pb-3 pr-0 pl-0 bg-company-violet text-center text-light shadow-lg rounded'>
		<h5>Editando Audiencia: <?php echo $this->audiencia->nombre; ?></h5>
		<div><?php echo $this->mensaje; ?></div>
		<input id="dir_url" type="hidden" value="<?php echo constant("URL"); ?>">
	</div>
	<div class='container'>
		<div class='row bg-gradient-purpleblue3-color justify-content-center'>
			<form action='<?php echo constant("URL"); ?>consulta/actualizarAudiencia' method='POST' id="form_1">
				<label for="menu_audiencia"><strong>Audiencia</strong></label>
				<div class="form-row mb-0 ml-3 mr-3" name="menu_audiencia" novalidate="novalidate">
					<div class="col-md-1">
						<div class="form-group">
							<label for="id_audiencia">ID:</label>
							<input type="text" class="form-control inputstl" name="id_audiencia" value="<?php echo $this->audiencia->id_audiencia; ?>" id="id_audiencia" placeholder="ID" readonly>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="c_nombre">Carpeta Judicial:</label>
							<input type="text" class="form-control inputstl" name="c_nombre" value="<?php echo $this->audiencia->nombre; ?>" id="c_nombre" placeholder="Carpeta Judicial" readonly>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="c_distrito" class="control-label">Distrito Judicial:</label>
							<select class="form-control selectpicker" name="c_distrito" id="c_distrito" aria-describedby="msj_c_distrito" required>
							</select>
							<div id="msj_nombre_c_distrito" class="error_f"></div>
							<input id="nombre_c_distrito_check" type="hidden" value=false>
						</div>
					</div>
					<div class="col-md-1">
						<div class="form-group">
							<label for="c_sala" class="control-label">Sala:</label>
							<select class="form-control selectpicker" name="c_sala" id="c_sala" aria-describedby="msj_sala" noneSelectedText="Sin Seleccionar.." required>
							</select>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label for="cfecha">Fecha:</label>
							<input type="text" class="form-control bg-white" name="cfecha" id="cfecha" placeholder="aaaa-mm-dd" aria-describedby="msj_fecha" readonly>
						</div>
					</div>

					<div class="col-md-2">
						<div class="form-group">
							<label for="chora">Hora:</label>
							<input type="text" class="form-control bg-white" name="chora" id="chora" placeholder="hh:mm" aria-describedby="msj_hora" noneSelectedText="Sin Seleccionar.." readonly>
						</div>
					</div>
				</div>
				<div class="form-row mb-1 ml-3 mr-3">
					<div class="col-md-4">
						<div class="form-group">
							<label for="c_juez">Juez(a):</label>
							<select class="form-control selectpicker" name="c_juez" id="c_juez" aria-describedby="msj_c_juez" noneSelectedText="Sin Seleccionar.." required>
							</select>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="c_taudiencia">Tipo de Audiencia:</label>
							<select class="form-control selectpicker" data-live-search="true" data-size="6" name="c_taudiencia" id="c_taudiencia" aria-describedby="msj_c_taudiencia" required>
							</select>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label for="c_confidencialidad">Reservada:</label>
							<select class="form-control selectpicker" name="c_confidencialidad" id="c_confidencialidad" aria-describedby="msj_c_tipo" noneSelectedText="Sin Seleccionar.." required>
							</select>
						</div>
					</div>

				</div>
				<div class="form-row mb-1 ml-3 mr-3">
					<div class="col-md-10">
						<div class="form-group" id="div_delito">
							<label for="c_delito" class="control-label">Delito:</label>
							<select class="selectpicker form-control" multiple data-live-search="true" data-selected-text-format="count > 3" data-size="6" name="c_delito" id="c_delito" noneSelectedText="Sin Seleccionar.." data-header="Seleccione uno o varios Delitos.." aria-invalid="true" required>
							</select>
							<div id="msj_c_delito"></div>
							<?php echo '<input id="c_delito_check" type="hidden" value = false >'; ?>
							<input id="c_delitomultiple" type="hidden" name="c_delitomultiple">
						</div>
					</div>
				</div>

				<div class="form-row mb-1 ml-3 mr-3">
					<div class="col-md-4">
						<div class="form-group">
							<label for="c_asistente">Asistente de Sala:</label>
							<select class="selectpicker form-control" multiple data-live-search="true" data-selected-text-format="count > 3" data-size="6" name="c_asistente" id="c_asistente" noneSelectedText="Sin Seleccionar.." data-header="Seleccione una(o) o Varias(os) Asistente(s).." aria-invalid="true" required>
							</select>
							<div id="msj_c_asistente"></div>
							<?php echo '<input id="c_asistente_check" type="hidden" value = false >'; ?>
							<input id="c_asistentemultiple" type="hidden" name="c_asistentemultiple">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="c_encargado">Encargado de Sala:</label>
							<select class="form-control selectpicker" name="c_encargado" id="c_encargado" aria-describedby="msj_c_asistente" noneSelectedText="Sin Seleccionar.." required>
							</select>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="c_tjuzgado">Tipo de Juzgado:</label>
							<select class="form-control selectpicker" name="c_tjuzgado" id="c_tjuzgado" aria-describedby="msj_c_asistente" noneSelectedText="Sin Seleccionar.." required>
							</select>
						</div>
					</div>
				</div>



				<label for="menu_audiencia2"><strong>Intervinientes:</strong></label>

				<div class="form-group mb-1 ml-3 mr-3">
					<label for="c_victima">Victimas</label>
					<textarea class="form-control" rows="3" id="c_victima" name="c_victima" placeholder="Victima(s)" onDrops="return false;" data-limit=150 aria-invalid="true" style="resize: none;" required><?php echo $this->audiencia->victima; ?></textarea>
					<div id="msj_c_victima"></div>
					<div>Quedan: <b><span id="remaining_c_victima" class="safe" style="color:#1d91d1;">150</span></b></div>
					<?php echo '<input id="c_victima_check" type="hidden" value = false >'; ?>
				</div>

				<div class="form-group mb-1 ml-3 mr-3">
					<label for="c_asesor">Asesor(es) Jurídico(s)</label>
					<textarea class="form-control" rows="2" id="c_asesor" name="c_asesor" placeholder="Asesor(es) Juridico(s)" onDrops="return false;" data-limit=150 aria-invalid="true" style="resize: none;"><?php echo $this->audiencia->asesor; ?></textarea>
					<div id="msj_c_asesor"></div>
					<div>Quedan: <b><span id="remaining_c_asesor" style="color:#1d91d1;">150</span></b></div>
				</div>

				<div class="form-group mb-1 ml-3 mr-3">
					<label for="c_fiscalia">Fiscal&iacute;a</label>
					<textarea class="form-control" rows="2" id="c_fiscalia" name="c_fiscalia" placeholder="Fiscalia" onDrops="return false;" data-limit=150 aria-invalid="true" style="resize: none;" required><?php echo $this->audiencia->fiscalia; ?></textarea>
					<div id="msj_c_fiscalia"></div>
					<div>Quedan: <b><span id="remaining_c_fiscalia" style="color:#1d91d1;">150</span></b></div>
					<?php echo '<input id="c_fiscalia_check" type="hidden" value = false >'; ?>
				</div>


				<div class="form-group mb-1 ml-3 mr-3">
					<?php
					$divideNombre = explode("-", $this->audiencia->nombre);
					$tipoCarpeta = $divideNombre[0];
					if ($tipoCarpeta == 'EJ') {
						echo '<label for="c_imputado">Sentenciado(s)</label>';
					} else if ($tipoCarpeta == 'JO') {
						echo '<label for="c_imputado">Acusado(s)</label>';
					} else {
						echo '<label for="c_imputado">Imputado(s)</label>';
					}
					?>
					<textarea class="form-control" rows="2" id="c_imputado" name="c_imputado" placeholder="Imputado(s)/Acusado(s)" onDrops="return false;" data-limit=150 aria-invalid="true" style="resize: none;" required><?php echo $this->audiencia->imputado; ?></textarea>
					<div id="msj_c_imputado"></div>
					<div>Quedan: <b><span id="remaining_c_imputado" style="color:#1d91d1;">150</span></b></div>
					<?php echo '<input id="c_imputado_check" type="hidden" value = false >'; ?>
				</div>


				<div class="form-group mb-1 ml-3 mr-3">
					<label for="c_defensa">Defensa</label>
					<textarea class="form-control" rows="2" id="c_defensa" name="c_defensa" placeholder="Defensa" onDrops="return false;" aria-invalid="true" data-limit=150 style="resize: none;" required><?php echo $this->audiencia->defensa; ?></textarea>
					<div id="msj_c_defensa"></div>
					<div class="text-align-right">Quedan: <b><span id="remaining_c_defensa" style="color:#1d91d1;">150</span></b></div>
					<?php echo '<input id="c_defensa_check" type="hidden" value = false >'; ?>
				</div>


				<?php

				if ($tipoCarpeta == 'EJ') {
					echo "<div class='form-group mb-1 ml-3 mr-3'>
				<label for='c_aut_penitenciaria'>Autoridad Penitenciaria </label>
				<textarea class='form-control'  rows='2' id='c_aut_penitenciaria' name='c_aut_penitenciaria' placeholder='Autoridad Penitenciaria'  onDrops='return false;'   data-limit=150 style='resize: none;'>" . $this->audiencia->aut_penitenciaria . "</textarea>
				<div class='text-align-right'>Quedan: <b><span id='remaining_c_aut_penitenciaria' style='color:#1d91d1;'>150</span></b></div>
				<input id='c_aut_penitenciaria_check' type='hidden' value = false >
				</div>";
				}
				?>

				<div class="row">
					<div class="col-lg-12">
						<button id="btnenviar" name="btnenviar" type="submit" class="btn btn-danger float-right">Realizar Cambio(s)</button>
					</div>
				</div>

			</form>



		</div>
	</div>
	<!--LAS LINEAS COMENTADAS SON ARCHIVOS EQUIVALENTES EN FORMATO CDN PARA QUE EL SISTEMA TRABAJE CON ESTOS MISMOS ARCHIVOS PERO QUE PROCEDAN DE INTERNET -->

	<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>-->
	<script type="text/javascript" src="<?php echo constant("URL"); ?>public/js/jquery_validate/jquery.validate.min.js"></script>

	<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.js"></script>-->
	<script type="text/javascript" src="<?php echo constant("URL"); ?>public/js/jquery_validate/additional-methods.min.js"></script>

	<script type="text/javascript" src="<?php echo constant("URL"); ?>public/js/cargarSelectsDeServer.js" defer></script>
	<script type="text/javascript" src="<?php echo constant("URL"); ?>public/js/b_validator_aleditar.js" defer></script>
	<script type="text/javascript" src="<?php echo constant("URL"); ?>public/js/validator_detalle.js" defer></script>
	<script type="text/javascript" src="<?php echo constant("URL"); ?>public/js/utils.js" defer></script>
	<?php require 'views/footer.php'; ?>