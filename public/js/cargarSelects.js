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

    
            ajaxGet(url+"public/xml/delitos.xml",function(respuestaXML)  {
                crearListaDesplegable("delito","tipo","c_delito", respuestaXML);
                //$('select[name=c_delito]').selectpicker();
            });
    
            ajaxGet(url+"public/xml/salas.xml",function(respuestaXML)  {
                crearListaDesplegable("sala","numero","c_sala", respuestaXML);
                //$('select[name=c_sala').selectpicker();
              });
    
            ajaxGet(url+"public/xml/distritos.xml",function(respuestaXML)  {
                crearListaDesplegable("distrito","nombre","c_distrito", respuestaXML);
                //$('select[name=c_distrito]').selectpicker('refresh');
              });
    
            ajaxGet(url+"public/xml/asistentes.xml",function(respuestaXML)  {
                crearListaDesplegable("asistente","nombre","c_asistente", respuestaXML);
                //$('select[name=c_asistente').selectpicker();
              });

            ajaxGet(url+"public/xml/encargados.xml",function(respuestaXML)  {
                crearListaDesplegable("encargado","nombre","c_encargado", respuestaXML);
                //$('select[name=c_taudiencia').selectpicker();
            });
            
            ajaxGet(url+"public/xml/juzgados.xml",function(respuestaXML)  {
              crearListaDesplegable("juzgado","tipo","c_tjuzgado", respuestaXML);
              //$('select[name=c_taudiencia').selectpicker();
            });  
    
            ajaxGet(url+"public/xml/tipoaudiencias.xml",function(respuestaXML)  {
                crearListaDesplegable("taudiencia","nombre","c_taudiencia", respuestaXML);
                //$('select[name=c_taudiencia').selectpicker();
               
            });
           ajaxGet(url+"public/xml/jueces.xml",function(respuestaXML)  {
              crearListaDesplegable("juez","nombre","c_juez", respuestaXML);
              //$('select[name=c_taudiencia').selectpicker();
             
          });
          ajaxGet(url+"public/xml/tipos.xml",function(respuestaXML)  {
            crearListaDesplegable("tipo","nombre","c_confidencialidad", respuestaXML);
            //$('select[name=c_taudiencia').selectpicker();
           
        });

 	/*obtenerElemento() obtiene un elemento de la pagina web para interactuar con el.*/	
	function obtenerElemento(id){
		return document.getElementById(id);
	}    

           
    });