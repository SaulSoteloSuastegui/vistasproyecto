
$(function(){

var $forma = $("#form_1");

if($forma.length){
$($forma).validate({
    rules:{
        nombre_cjudicial:{
                        required: true},
                  cfecha:{
                        required: true},
                   chora:{
                        required: true},
                c_asistente:{
                        required: true},
                c_delito:{
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
        nombre_cjudicial:{
                        required: imprimirMsj('El Dato es Requerido',false)},
                  cfecha:{
                        required: imprimirMsj('El Dato es Requerido',false)},
                   chora:{
                        required: imprimirMsj('El Dato es Requerido',false)},
             c_asistente:{
                        required: imprimirMsj('El Dato es Requerido',false)},
                c_delito:{
                        required: imprimirMsj('El Dato es Requerido',false)},
               c_victima:{
                        required: imprimirMsj('El Dato es Requerido',false)},
               c_fiscalia:{
                        required: imprimirMsj('El Dato es Requerido',false)},
               c_imputado:{
                        required: imprimirMsj('El Dato es Requerido',false)},
               c_defensa:{
                        required: imprimirMsj('El Dato es Requerido',false)}
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