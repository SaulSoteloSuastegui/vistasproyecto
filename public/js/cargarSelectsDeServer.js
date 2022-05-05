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

    
    
    function crearListaDesplegable(objeto_xml,etiquetaXML_AMostrar,elemento_HTML,respuesta_XML,valorSelect){
    
      var lista_desplegable = "";
      var array_elementosXML = respuesta_XML.getElementsByTagName(objeto_xml);

      if(elemento_HTML=="c_asistente" && tipo_usuario=="asistente"){
        lista_desplegable += "<option>"+nombre_usuario+"</option>";
        var resultado = document.getElementById(elemento_HTML);
        resultado.innerHTML = lista_desplegable;
        $('select[name='+elemento_HTML+']').selectpicker('val', nombre_usuario);  
       }else{
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
           $('select[name='+elemento_HTML+']').selectpicker('val', valorSelect);

          }
        }


        function crearListaDesplegableMultiple(objeto_xml,etiquetaXML_AMostrar,elemento_HTML,respuesta_XML,valorSelect){
    
          var lista_desplegable = "";
          var array_elementosXML = respuesta_XML.getElementsByTagName(objeto_xml);
    

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
               $('select[name='+elemento_HTML+']').selectpicker('val', valorSelect);
    
              
            }


            ajaxGet(url+"public/xml/delitos.xml",function(respuestaXML)  {
                var db_delito = obtenerElemento("db_delito").value;
                var delitomultiple=db_delito.split(","); 
                console.log(db_delito); 
                console.log(delitomultiple);               
                if(delitomultiple.length>1){
                  crearListaDesplegableMultiple("delito","tipo","c_delito", respuestaXML, delitomultiple);
                  }else{
                  crearListaDesplegable("delito","tipo","c_delito", respuestaXML, db_delito);
                  }
                //$('select[name=c_delito]').selectpicker();
            });

            ajaxGet(url+"public/xml/asistentes.xml",function(respuestaXML)  {
              var db_asistente = obtenerElemento("db_asistente").value;
              var asistentemultiple=db_asistente.split(","); 
              console.log(db_asistente); 
              console.log(asistentemultiple);               
              if(asistentemultiple.length>1){
                crearListaDesplegableMultiple("asistente","nombre","c_asistente", respuestaXML, asistentemultiple);
                }else{
                crearListaDesplegable("asistente","nombre","c_asistente", respuestaXML, db_asistente);
                }
              //$('select[name=c_delito]').selectpicker();
          });
    
            ajaxGet(url+"public/xml/salas.xml",function(respuestaXML)  {
               var db_sala = obtenerElemento("db_sala").value;
                crearListaDesplegable("sala","numero","c_sala", respuestaXML, db_sala);
                //$('select[name=c_sala').selectpicker();
              });
    
            ajaxGet(url+"public/xml/distritos.xml",function(respuestaXML)  {
                var db_distrito = obtenerElemento("db_distrito").value;
                crearListaDesplegable("distrito","nombre","c_distrito", respuestaXML, db_distrito);
                //$('select[name=c_distrito]').selectpicker('refresh');
              });
  
    
            ajaxGet(url+"public/xml/tipoaudiencias.xml",function(respuestaXML)  {
                var db_taudiencia= obtenerElemento("db_taudiencia").value;
                crearListaDesplegable("taudiencia","nombre","c_taudiencia", respuestaXML, db_taudiencia);
                //$('select[name=c_taudiencia').selectpicker();
               
            });
           ajaxGet(url+"public/xml/jueces.xml",function(respuestaXML)  {
              var db_juez= obtenerElemento("db_juez").value;
              crearListaDesplegable("juez","nombre","c_juez", respuestaXML, db_juez);
              //$('select[name=c_taudiencia').selectpicker();
             
             
          });
          ajaxGet(url+"public/xml/tipos.xml",function(respuestaXML)  {
            var db_tipo= obtenerElemento("db_tipo").value;
            crearListaDesplegable("tipo","nombre","c_confidencialidad", respuestaXML,db_tipo);
            //$('select[name=c_taudiencia').selectpicker();
          });

          ajaxGet(url+"public/xml/encargados.xml",function(respuestaXML)  {
            var db_encargado= obtenerElemento("db_encargado").value;
            crearListaDesplegable("encargado","nombre","c_encargado", respuestaXML, db_encargado);
            //$('select[name=c_taudiencia').selectpicker();
           
        });
        
        ajaxGet(url+"public/xml/juzgados.xml",function(respuestaXML)  {
          var db_tipojuzgado= obtenerElemento("db_tipojuzgado").value;
          crearListaDesplegable("juzgado","tipo","c_tjuzgado", respuestaXML, db_tipojuzgado);
          //$('select[name=c_taudiencia').selectpicker();
         
        });    


   	/*obtenerElemento() obtiene un elemento de la pagina web para interactuar con el.*/	
	function obtenerElemento(id){
		return document.getElementById(id);
	}

           
    });