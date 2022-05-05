$(document).ready(function(){/*Esta Declaracion se usa para que el interprete de Scripts cargue este script cuando la pagina web principal este lista*/	

//$.fn.selectpicker.Constructor.BootstrapVersion = '4';
var url = document.getElementById("dir_url").value;

    function ajaxGet(url, callback) {
    
            var req = new XMLHttpRequest();
            req.open("GET", url, true);
            req.addEventListener("load", function() {
              if (req.status >= 200 && req.status < 400) {
                //callback(req.responseText);//Respuesta TXT
                callback(req.responseXML);//Respuesta XML
              } else {
                console.error(req.status + " " + req.statusText);
              }
            });
            req.addEventListener("error", function(){
              console.error("Error de red");
            });
            req.send(null);
    }

 
    var tipo_usuario = obtenerElemento("tipo_usuario").value;
    var nombre_usuario = obtenerElemento("nombre_usuario").value;
    
    function crearListaDesplegable(objeto_xml,etiquetaXML_AMostrar,elemento_HTML,respuesta_XML){
      var lista_desplegable = "";
      var array_elementosXML = respuesta_XML.getElementsByTagName(objeto_xml);
      //COMETADO PARA ASISTENTE DE SALA
      /*if(elemento_HTML=="c_asistente" && tipo_usuario=="asistente"){
        lista_desplegable += "<option>"+nombre_usuario+"</option>";
        var resultado = document.getElementById(elemento_HTML);
        resultado.innerHTML = lista_desplegable;
        $('select[name='+elemento_HTML+']').selectpicker('val', nombre_usuario);  
       }else{*/
           
            for(var i=0; i< array_elementosXML.length; i++){
                lista_desplegable += "<option>"+
                array_elementosXML[i].getElementsByTagName(etiquetaXML_AMostrar)[0].childNodes[0].nodeValue +
                            "</option>";
                                
            }
            var resultado = document.getElementById(elemento_HTML);
            resultado.innerHTML = lista_desplegable;
            //$('.my-custom').selectpicker();
            //$("#c_taudiencia").prop('disabled', false);
           //$("#"+elemento_HTML).selectpicker('refresh');
           // $("."+elemento_HTML).selectpicker('refresh');
           $('select[name='+elemento_HTML+']').selectpicker('refresh');

      /*}*/
  }    
            ajaxGet(url+"public/xml/asistentes.xml",function(respuestaXML)  {
                crearListaDesplegable("asistente","nombre","c_asistente", respuestaXML);
                //$('select[name=c_asistente').selectpicker();
              });
            ajaxGet(url+"public/xml/encargados.xml",function(respuestaXML)  {
                crearListaDesplegable("encargado","nombre","c_encargado", respuestaXML);
                //$('select[name=c_taudiencia').selectpicker();
               
            });


 	/*obtenerElemento() obtiene un elemento de la pagina web para interactuar con el.*/	
	function obtenerElemento(id){
		return document.getElementById(id);
	}    

           
    });