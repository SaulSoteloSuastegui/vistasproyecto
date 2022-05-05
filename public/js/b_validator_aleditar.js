$(document).ready(function(){
	
	var restaurarBorde='1px solid #787879';

	$('c_delito').addClass('col-md-10 d-flex bd-highlight').selectpicker('setStyle');
	
	var db_delito= obtenerElemento("db_delito").value;
	var db_asistente= obtenerElemento("db_asistente").value;
	obtenerElemento("c_delitomultiple").value=db_delito;	
	obtenerElemento("c_asistentemultiple").value=db_asistente;

		var hora=obtenerElemento("db_hora").value;
		var fecha=obtenerElemento("db_fecha").value;
		$("#chora").val(hora);
		$("#cfecha").val(fecha);

	$(document).on('change select', '#c_delito', function(){
		var op_d=obtenerElemento("c_delito");
		if(op_d.options[op_d.selectedIndex].text!=null){
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


		$(document).on('change select', '#c_asistente', function(){
			var op_d=obtenerElemento("c_asistente");
			if(op_d.options[op_d.selectedIndex].text!=null){
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

		$('#c_asistente').on('change',function() {

			var asistentes = $('select#c_asistente').val();
			obtenerElemento('c_asistentemultiple').value=asistentes;
			console.log(obtenerElemento('c_asistentemultiple').value);
		  });

		$('#c_delito').on('change',function() {

			var delitos = $('select#c_delito').val();
			obtenerElemento('c_delitomultiple').value=delitos;
			console.log(obtenerElemento('c_delitomultiple').value);
		  });

	

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



	});



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

	var dir_url = obtenerElemento("dir_url").value;

	/*imprimirMsj() crear un mensaje de error/validez tipo string, con el mensaje y tipo de mensaje pasados como argumentos */
	function imprimirMsj(msj, es_Correcto){
		
		var img="";
		var p_class="";
		
			if(es_Correcto){
				img = "<img src='"+dir_url+"public/image/valido.png'  height='15px' >";
				p_class='<span class="sp_valid">';
			}else{
				img = "<img src='"+dir_url+"public/image/no_valido.png' alt='Error: ' height='13px'>";
				p_class='<span class="sp_error">';
			}
		
		var str="<div class='m-0 p-0'><small>"+p_class+""+img+" "+msj+"</span></small></div>";
		return str;
	}





