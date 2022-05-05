
$(function(){

var $forma = $("#form_1");


if($forma.length){
$($forma).validate({
    rules:{
                c_distrito:{
                        required: true},
                c_sala:{
                        required: true},
                cfecha:{
                        required: true},
                chora:{
                        required: true},
                c_juez:{
                        required: true},
                c_taudiencia:{
                        required: true},
                c_confidencialidad:{
                        required: true},
                c_delito:{
                        required: true},
                c_asistente:{
                        required: true},
                c_encargado:{
                        required: true},
                c_tjuzgado:{
                        required: true},
                c_victima:{
                        required: true},
                c_fiscalia:{
                        required: true},
                c_imputado:{
                        required: true},
                c_defensa:{
                        required: true}

    },
    messages:{
                c_distrito:{
                        required: imprimirMsj('Dato Requerido',false)},
                 c_sala:{
                        required: imprimirMsj('Dato Requerido',false)},
                  cfecha:{
                        required: imprimirMsj('Dato Requerido',false)},
                   chora:{
                        required: imprimirMsj('Dato Requerido',false)},
                c_juez:{
                        required: imprimirMsj('Dato Requerido',false)},
                c_taudiencia:{
                        required: imprimirMsj('Dato Requerido',false)},
                c_confidencialidad:{
                        required: imprimirMsj('Dato Requerido',false)},
                c_delito:{
                        required: imprimirMsj('Dato Requerido',false)},
                c_asistente:{
                        required: imprimirMsj('Dato Requerido',false)},
                c_encargado:{
                        required: imprimirMsj('Dato Requerido',false)},
                c_tjuzgado:{
                        required: imprimirMsj('Dato Requerido',false)},
               c_victima:{
                        required: imprimirMsj('Dato Requerido',false)},
               c_fiscalia:{
                        required: imprimirMsj('Dato Requerido',false)},
               c_imputado:{
                        required: imprimirMsj('Dato Requerido',false)},
               c_defensa:{
                        required: imprimirMsj('Dato Requerido',false)}
    },
    errorPlacement: function(error,element){

        Swal.fire({
                icon: "error",
                title: "Datos Requeridos",
                position: "center",
                text: "Se deben ingresar algunos datos que son Requeridos",
                showConfirmButton: true
          });

         if(element.is(":radio")){
            error.appendTo(element.parents());
        }else if(element.is(":checkbox")){
            error.appendTo(element.parents());
        }else{
            error.insertAfter(element);
        }
    }
});
}
});