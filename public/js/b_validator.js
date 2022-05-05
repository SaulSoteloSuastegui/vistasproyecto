$(document).ready(function(){
	
	var restaurarBorde='1px solid #787879';

	$('c_delito').addClass('col-md-10 d-flex bd-highlight').selectpicker('setStyle');
	jQuery.datetimepicker.setLocale('es');


async function revisarCarpetayFecha(carpeta,fecha){

	   const data = new FormData();
		data.append('fecha', fecha);
		data.append('carpeta', carpeta);
		fetch(dir_url+"public/php/revisarcarpetayfechaBD.php", {
		method: 'POST',
		body: data
		})
		.then(function(response) {
		if(response.ok) {
			return response.text();
		} else {
			throw "Error en la llamada Ajax";
		}

		})
		.then(function(resultadotxt) {
		//console.log(resultadotxt);
		var arrayresult = resultadotxt.split("_");
		var valido=false;
		//console.log(arrayresult);
		switch(arrayresult[0]){
			case "NoRegistrada":
					valido=true;
					msj = arrayresult[1];
				break;
			case "YaRegistrada":
					msj = arrayresult[1];
				break;
			case "NoValida":
					msj = arrayresult[1];
				break;
			default:
					msj = "Error";
				break;
		}
		
			if(valido){
				habilitarBoton("btnenviar");
			}else{
				deshabilitarBoton("btnenviar");
			}
			obtenerElemento("msj_nombre_cjudicial").innerHTML=imprimirMsj(msj,valido);
		})
		.catch(function(err) {
		console.log(err);
		});
}


	$(document).on('propertychange keyup keydown input paste', '#nombre_cjudicial', function(){
		validarCarpetaJudicial();
		//console.log("Nombre_nuevo");
	})

	$(document).on('change', '#cfecha', function(){
		validarCarpetaJudicial();
		//console.log("fecha");
	})

	//c_asistentemultiple

	$(document).on('change', '#c_delito', function(){
		var op_d=obtenerElemento("c_delito");
		if(op_d.options[op_d.selectedIndex]!=null){
			var op_valida=document.getElementById("c_delito_check");
			op_valida.value=true;
			//var op_d=document.getElementById("c_delito");
			var seleccion = op_d.options[op_d.selectedIndex].text;
			var a=seleccion;
			if(a!=''){
				$('#msj_c_delito').html('');
				$('#c_delito').css('border',restaurarBorde);
			}
		}else{
			var op_valida=obtenerElemento("c_delito_check");
			op_valida.value=false;
		}
		});


		$(document).on('change', '#c_asistente', function(){
			var op_d=obtenerElemento("c_asistente");
			if(op_d.options[op_d.selectedIndex]!=null){
				var op_valida=document.getElementById("c_asistente_check");
				op_valida.value=true;
				//var op_d=document.getElementById("c_delito");
				var seleccion = op_d.options[op_d.selectedIndex].text;
				var a=seleccion;
				if(a!=''){
					$('#msj_c_asistente').html('');
					$('#c_asistente').css('border',restaurarBorde);
				}
			}else{
				var op_valida=obtenerElemento("c_asistente_check");
				op_valida.value=false;
			}
			});

		$('#c_delito').on('change',function() {

			var delitos = $('select#c_delito').val();
			obtenerElemento('c_delitomultiple').value=delitos;
			console.log(obtenerElemento('c_delitomultiple').value);
			
		  });
		  
		  $('#c_asistente').on('change',function() {

			var delitos = $('select#c_asistente').val();
			obtenerElemento('c_asistentemultiple').value=delitos;
			console.log(obtenerElemento('c_asistentemultiple').value);
		  });



		  $('#check_aut_penitenciaria').click(function() {
            if ($("#check_aut_penitenciaria").is(':checked')) {
				console.log("checked");
				obtenerElemento('c_aut_penitenciaria').disabled=false;
				obtenerElemento('c_aut_penitenciaria').focus();
			}else{
				console.log("No checked");
				obtenerElemento('c_aut_penitenciaria').disabled=true;
				obtenerElemento('c_aut_penitenciaria').focus();
			}
		});

		$('#label_aut_penitenciaria').click(function() {
			if ($("#check_aut_penitenciaria").is(':checked')) {
				obtenerElemento('check_aut_penitenciaria').checked=false;
				obtenerElemento('c_aut_penitenciaria').disabled=true;
				obtenerElemento('c_aut_penitenciaria').focus();
			}else{
				console.log("No checked");
				obtenerElemento('check_aut_penitenciaria').checked=true;
				obtenerElemento('c_aut_penitenciaria').disabled=false;
				obtenerElemento('c_aut_penitenciaria').focus();
			}
		});


	function validarCarpetaJudicial(){
		//var patron = /^((CI|ci|JO|jo|EXH|exh|EJ|ej|C|c)\-\d{1,3}\/(19|20)\d{2})(\s*)$/;
		var nombrecarpeta = obtenerElemento("nombre_cjudicial").value;
		var fecha = obtenerElemento("cfecha").value;
		revisarCarpetayFecha(nombrecarpeta,fecha);
	}
	

	$('#c_victima').on("propertychange keyup input paste",function () {
        var limit = $(this).data("limit");
        var remainingChars = limit - $(this).val().length;
        if (remainingChars <= 0) {
            $(this).val($(this).val().substring(0, limit));
        }
        $('#remaining_c_victima').text(remainingChars<=0?0:remainingChars);
    });

    $('#c_asesor').on("propertychange keyup input paste",function () {
        var limit = $(this).data("limit");
        var remainingChars = limit - $(this).val().length;
        if (remainingChars <= 0) {
            $(this).val($(this).val().substring(0, limit));
        }
        $('#remaining_c_asesor').text(remainingChars<=0?0:remainingChars);
    });

    $('#c_fiscalia').on("propertychange keyup input paste",function () {
        var limit = $(this).data("limit");
        var remainingChars = limit - $(this).val().length;
        if (remainingChars <= 0) {
            $(this).val($(this).val().substring(0, limit));
        }
        $('#remaining_c_fiscalia').text(remainingChars<=0?0:remainingChars);
    });

    $('#c_imputado').on("propertychange keyup input paste",function () {
        var limit = $(this).data("limit");
        var remainingChars = limit - $(this).val().length;
        if (remainingChars <= 0) {
            $(this).val($(this).val().substring(0, limit));
        }
        $('#remaining_c_imputado').text(remainingChars<=0?0:remainingChars);
    });

    $('#c_defensa').on("propertychange keyup input paste",function () {
        var limit = $(this).data("limit");
        var remainingChars = limit - $(this).val().length;
        if (remainingChars <= 0) {
            $(this).val($(this).val().substring(0, limit));
        }
        $('#remaining_c_defensa').text(remainingChars<=0?0:remainingChars);
	});

	$('#c_aut_penitenciaria').on("propertychange keyup input paste",function () {
        var limit = $(this).data("limit");
        var remainingChars = limit - $(this).val().length;
        if (remainingChars <= 0) {
            $(this).val($(this).val().substring(0, limit));
        }
        $('#remaining_c_aut_penitenciaria').text(remainingChars<=0?0:remainingChars);
	});

	});


/*existeElCorreoEnBD() revisa que el correo electronico no este registrado ya en el servidor.*/	
function noExisteElNombreDeCarpetaEnBD(nombreCarpeta) { 
	var carpeta = nombreCarpeta;
		//Validar Correo ya registrado Usando XMLHTTPREQUEST
	var xmlhttp = new XMLHttpRequest();
		
	xmlhttp.onreadystatechange = function() {
	if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
		var resultadotxt = xmlhttp.responseText;
		var valido=false;
		switch(resultadotxt){
			case "NoRegistrada":
					valido=true;
					msj = "La Carpeta "+carpeta+" Es Valida";
				break;
			case "YaRegistrada":
					msj = "La Carpeta "+carpeta+" ya ha sido registrado en este Sitio";
				break;
			case "NoValida":
					msj = "La Carpeta  "+carpeta+" No Es Valida";
				break;
			default:
					msj = "Error";
				break;
		}
		
			if(valido){
				habilitarBoton("btnenviar");
			}else{
				deshabilitarBoton("btnenviar");
			}
			obtenerElemento("msj_nombre_cjudicial").innerHTML=imprimirMsj(msj,valido);
		}
	};
	
	xmlhttp.open("POST", "public/php/revisarcarpetaBD.php", true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.send("carpeta="+carpeta);
		
	}


	/*modificarChecker() Modifica el estado de un verificador de campo con los siguientes valores:
	0:No Valido y 1:Valido .*/		
	function modificarChecker(input_Checker, es_Correcto){
		if(es_Correcto){
			obtenerElemento(input_Checker).value=true;
		}else{
			obtenerElemento(input_Checker).value=false;
		}
	}	

	/*obtenerElemento() obtiene un elemento de la pagina web para interactuar con el.*/	
	function obtenerElemento(id){
		return document.getElementById(id);
	}


/*habilitarBoton() habilita el boton por medio del id pasado como argumento.*/	
function habilitarBoton(boton){
	obtenerElemento(boton).disabled = false;
}

/*deshabilitarBoton() deshabilita el boton por medio del id pasado como argumento.*/		
function deshabilitarBoton(boton){
	obtenerElemento(boton).disabled = true;
}
 
	var dir_url = obtenerElemento("dir_url").value;

	/*imprimirMsj() crear un mensaje de error/validez tipo string, con el mensaje y tipo de mensaje pasados como argumentos */
	function imprimirMsj(msj, es_Correcto){
		
		var img="";
		var p_class="";
		
			if(es_Correcto){
				p_class='<p class="p_correcto">';
				img = "<img src='"+dir_url+"public/image/valido.png'  height='15px' >";
				
			}else{
				p_class='<p class="p_error">';
				img = "<img src='"+dir_url+"public/image/no_valido.png' alt='Error: ' height='13px'>";
			}
		
		var str="<div class='m-0 p-0'><small>"+p_class+""+img+" "+msj+"</p></span></small></div>";
		return str;
	}

