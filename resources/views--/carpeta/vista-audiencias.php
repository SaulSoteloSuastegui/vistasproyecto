<?php

$info_mostrarDVD=0;
$filacompleta_mostrarDVD=0;
$anchofila = 450;
$usuario="";

switch ($_SESSION['tipo_usuario']) {
    case 'adminsitio':
        $filacompleta_mostrarDVD = 9;
        $info_mostrarDVD = 7;
        break;
    case 'superencargado':
        $filacompleta_mostrarDVD = 9;
        $info_mostrarDVD = 7;
        break;
    case 'encargado':
        $filacompleta_mostrarDVD = 9;
        $info_mostrarDVD = 7;
        break;
    default:
        $filacompleta_mostrarDVD = 8;
        $info_mostrarDVD = 6;
        $anchofila = 420;
        break;
}


$divideNombre = explode("-", $audiencias_page['nombre']);
$tipoCarpeta = $divideNombre[0];

$divideFecha = explode("-", $audiencias_page['fecha_c']);
$anno = $divideFecha[0] . "/";
$mes = $divideFecha[1] . "/";
$dia = $divideFecha[2];
$mmes;
switch ($divideFecha[1]) {
    case '01': $mmes = 'Enero';
        break;
    case '02': $mmes = 'Febrero';
     break;
    case '03': $mmes = 'Marzo';
        break;
    case '04': $mmes = 'Abril';
        break;
    case '05': $mmes = 'Mayo';
        break;
    case '06': $mmes = 'Junio';
        break;
    case '07': $mmes = 'Julio';
        break;
    case '08': $mmes = 'Agosto';
        break;
    case '09': $mmes = 'Septiembre';
        break;
    case '10': $mmes = 'Octubre';
        break;
    case '11': $mmes = 'Noviembre';
        break;
    case '12': $mmes = 'Diciembre';
        break;
    default:
        $mmes = 'No Valida';
}

$fechaEnEspannol = $dia . ' de ' . $mmes . ' de ' . $divideFecha[0];
$fechaEnEspannolStick = $dia .' '. $mmes . ' ' . $divideFecha[0];
echo"
<table class='table-sm table-responsive table-bordered p-0 m-0' id='tabla-num-".$audiencias_page['id_audiencia']."'>
    <thead>
        <tr> 
            <th class='titulo_id'> ID:" . $audiencias_page['id_audiencia'] . "</th>
            <th class='titulo_tabla' style='width:94%'> Audiencia " . $audiencias_page['nombre'] . "</th>
        </tr>
    </thead>

    <tbody id='tbody-audiencias'>
    <tr>
    <td colspan='2'>
            <div class='row pr-0 mr-0'>
                <div class='col-md-2 mb-3'>
                    <ul class='nav nav-pills flex-column' id='myTab' role='tablist'>
                        <li class='nav-item'>
                            <a class='nav-link active' id='home-tab-".$audiencias_page['id_audiencia']."' data-toggle='tab' href='#home-".$audiencias_page['id_audiencia']."' role='tab' aria-controls='home-".$audiencias_page['id_audiencia']."' aria-selected='true'>Audiencia</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' id='video-tab-".$audiencias_page['id_audiencia']."' data-toggle='tab' href='#video-".$audiencias_page['id_audiencia']."' role='tab' aria-controls='video-".$audiencias_page['id_audiencia']."' aria-selected='false'>Audio/Video</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' id='informacion-tab-".$audiencias_page['id_audiencia']."' data-toggle='tab' href='#informacion-".$audiencias_page['id_audiencia']."' role='tab' aria-controls='informacion-".$audiencias_page['id_audiencia']."' aria-selected='false'>Informaci&oacute;n</a>
                        </li>
                    </ul>
                </div>

                <div class='col-md-10'>
                    <div class='tab-content' id='myTabContent'>
                        <div class='tab-pane fade show active' id='home-".$audiencias_page['id_audiencia']."' role='tabpanel' aria-labelledby='home-tab-".$audiencias_page['id_audiencia']."'>
                                <table class='table-sm herramientas'>
                                    <tr>
                                        <th class='info_tipo_audiencia' scope='col' >Tipo de Audiencia</th>
                                        <th class='info_delito' scope='col' >Delito</th>
                                        <th class='info_fecha' scope='col' >Fecha</th>
                                        <th class='info_hora' scope='col' >Hora</th>
                                        <th class='info_editar_datos' scope='col' >Editar Datos</th>
                                    </tr>
                                    <tr>
                                        <td class='info_titulo' scope='col' >".$audiencias_page['tipoaudiencia']."</td>
                                        <td class='info_titulo' scope='col' >".$audiencias_page['delito']."</td>
                                        <td class='info_titulo' scope='col' >".$fechaEnEspannolStick."</td>
                                        <td class='info_titulo' scope='col' >".$audiencias_page['hora']."</td>";
                                         foreach (MOSTRAR_A_USUARIOS_BTN_EDITAR_DATOS as &$usuario_permitido) {
                                                        if ($_SESSION['tipo_usuario'] == $usuario_permitido) {
                                                        echo "<td>
                                                                    <a href='" . constant('URL') . "Consulta/editarAudiencia/" . $audiencias_page['id_audiencia'] . "' alt='Editar' data-toggle='tooltip' title='Editar Datos Audiencia ".$audiencias_page['nombre']."' >
                                                                        <img class='icon_boton' src='" . constant('URL') . "/public/icon/png/pencil.png' height='20px'>
                                                                    </a>
                                                            </td>";
                                                        break;
                                                        }
                                            }
                                    echo "</tr>

                                </table>
                        </div>
                        <div class='tab-pane fade' id='video-".$audiencias_page['id_audiencia']."' role='tabpanel' aria-labelledby='video-tab-".$audiencias_page['id_audiencia']."'>
                            ";

                            echo "
                            <div class='row h-100 align-items-center justify-content-center text-center'>
                            <div class'col-auto'> 
                                    <table class='table-responsive-sm table-borderless m-0 p-0'>
                                        <tr>
                                        
                                        <td  scope='col'>Fecha: ".$fechaEnEspannolStick."</td>
                                        <td  scope='col'> ";
                                            foreach (MOSTRAR_A_USUARIOS_BTN_DESCARGA_VIDEO as &$usuario_permitido) {
                                                if ($_SESSION['tipo_usuario'] == $usuario_permitido) {
                                                echo "
                                                            <a  data-toggle='tooltip' title='Descargar Audiencia ".$audiencias_page['nombre']."' href='" . constant('SERVERVIDEO') . $anno . $mes . $audiencias_page['nombre_archivo'] . ".mp4' download='" . $audiencias_page['nombre'] . "' target='_blank' >
                                                                    <img class='icon_boton' src='" . constant('URL') . "/public/image/download.png' />
                                                            </a>";
                                                break;
                                                }
                                            }echo"
                                        </td>
                                    
                                        </tr>
                                        <tr>
                                            <td colspan='2'>
                                            
                                                <video controls  src='" . constant('SERVERVIDEO') . $anno . $mes . $audiencias_page['nombre_archivo'] . ".mp4'" . " class='visor_video embed-responsive-item' data-toggle='tooltip' data-placement='top' title='". $audiencias_page['nombre']." - " . $fechaEnEspannolStick . "' ";

                                                $usuario_btn_descarga_video=false;
                                                foreach (MOSTRAR_A_USUARIOS_BTN_DESCARGA_VIDEO as &$usuario_permitido) {
                                                    if ($_SESSION['tipo_usuario'] == $usuario_permitido) {   
                                                    echo "<a href='" . constant('SERVERVIDEO') . $anno . $mes . $audiencias_page['nombre_archivo'] . ".mp4' download><span class='icon-download'>Download</span></a> ";
                                                    $usuario_btn_descarga_video=true;    
                                                    break;
                                                    }
                                                } 

                                                if(!$usuario_btn_descarga_video){
                                                    echo constant('NO_DESCARGAR_VIDEO')."> ";
                                                }
                                            echo "
                                            
                                            </td>
                                        </tr>

                                    </table>
                            </div>    
                            </div>          

                    </div>
                    <div class='tab-pane fade' id='informacion-".$audiencias_page['id_audiencia']."' role='tabpanel' aria-labelledby='informacion-tab-".$audiencias_page['id_audiencia']."'>

                    <div class='accordion m-0 p-0' id='accordionExample'>
                        <div class='card m-0 p-0'>
                            <div class='card-header' id='heading" . $audiencias_page['id_audiencia'] . "'>
                                    <h2 class='info_titulo m-0 p-0' >
                                    <button class='btn btn-link collapsed' type='button' data-toggle='collapse' data-target='#collapse" . $audiencias_page['id_audiencia'] . "' aria-expanded='false' aria-controls='collapseTwo' >
                                        Informaci&oacute;n Detallada de Audiencia: " . $audiencias_page['nombre'] . " - ".$fechaEnEspannolStick."</button>
                                    </h2>
                            </div>
                            <div id='collapse" . $audiencias_page['id_audiencia'] . "' class='collapse' aria-labelledby='heading" . $audiencias_page['id_audiencia'] . "' data-parent='#accordionExample'>";

                                echo
                                        "<div class='card-body'>
                                            <table class='table-sm herramientas' style='width:100%'>
                                                <tr>
                                                    <th class='info_titulo' scope='col' colspan='3'>Herramientas</th>
                                                </tr>
                                                <tr>";
                                                    echo "<td  scope='col' width='33%' class='titulo_herramienta'>";
                                                        foreach (MOSTRAR_A_USUARIOS_BTN_DESCARGA_VIDEO as &$usuario_permitido) {
                                                            if ($_SESSION['tipo_usuario'] == $usuario_permitido) {
                                                                echo "Descargar Video";
                                                            break;
                                                            }
                                                        }
                                                    echo "</td>";
                                                    echo "<td  scope='col' width='33%' class='titulo_herramienta'>";
                                                        foreach (MOSTRAR_A_USUARIOS_INFORMACION_PDF as &$usuario_permitido) {
                                                                if ($_SESSION['tipo_usuario'] == $usuario_permitido) {
                                                                    echo "Archivo PDF";
                                                                    break;
                                                                }
                                                            }
                                                    echo "</td>";
                                                    echo "<td  scope='col' width='33%' class='titulo_herramienta'>";
                                                        foreach (MOSTRAR_A_USUARIOS_PORTADA_DVD as &$usuario_permitido) {
                                                                if ($_SESSION['tipo_usuario'] == $usuario_permitido) {
                                                                    echo "Portada DVD";
                                                                    break;
                                                                }
                                                            }
                                                    echo "</td>";

                                echo "            </tr>
                                                <tr>
                                                        <td>    ";
                                                            foreach (MOSTRAR_A_USUARIOS_BTN_DESCARGA_VIDEO as &$usuario_permitido) {
                                                                if ($_SESSION['tipo_usuario'] == $usuario_permitido) {
                                                                echo "
                                                                            <a  data-toggle='tooltip' title='Descargar Audiencia ".$audiencias_page['nombre']."' href='" . constant('SERVERVIDEO') . $anno . $mes . $audiencias_page['nombre_archivo'] . ".mp4' download='" . $audiencias_page['nombre'] . "' target='_blank' >
                                                                                    <img class='icon_boton' src='" . constant('URL') . "/public/image/download.png' />
                                                                            </a>";
                                                                break;
                                                                }
                                                            }
                                echo "                      </td>
                                                            <td>";
                                                            foreach (MOSTRAR_A_USUARIOS_INFORMACION_PDF as &$usuario_permitido) {
                                                                if ($_SESSION['tipo_usuario'] == $usuario_permitido) {
                                                                        echo "<a href='" . constant('URL') . "Consulta/verArchivoPDF/" . $audiencias_page['id_audiencia'] . "'  target='_blank' alt='PDF' data-toggle='tooltip' title='Archivo de Informaci&oacute;n PDF " . $audiencias_page['nombre'] . "' >
                                                                                    <img class='icon_boton' src='" . constant('URL') . "/public/icon/png/pdf_icon.png'>
                                                                            </a>";
                                                                        break;
                                                                    }
                                                                }
                                echo "                      </td>
                                                            <td >";
                                                            foreach (MOSTRAR_A_USUARIOS_PORTADA_DVD as &$usuario_permitido) {
                                                                    if ($_SESSION['tipo_usuario'] == $usuario_permitido) {
                                                                        if ($tipoCarpeta == 'JO') {
                                                                        echo "<div>
                                                                                    <a href='" . constant('URL') . "Consulta/verDVDPDF/" . $audiencias_page['id_audiencia'] . "'  target='_blank' alt='PDF' data-toggle='tooltip' title='DVD Tribunal Unitario PDF' >
                                                                                    <img class='icon_boton' src='" . constant('URL') . "/public/icon/png/CD_icon.png' >
                                                                                    </a>
                                                                                    <a href='" . constant('URL') . "Consulta/verDVDTCOLPDF/" . $audiencias_page['id_audiencia'] . "'  target='_blank' alt='DVD Tribunal Colegiado' data-toggle='tooltip' title='DVD Tribunal Colegiado PDF' >
                                                                                        <img class='icon_boton' src='" . constant('URL') . "/public/icon/png/CD_icon.png' '>
                                                                                    </a>
                                                                                </div>";
                                                                        } else {
                                                                            echo "<a href='" . constant('URL') . "Consulta/verDVDPDF/" . $audiencias_page['id_audiencia'] . "'  target='_blank' alt='PDF' data-toggle='tooltip' title='Portada DVD " . $audiencias_page['nombre'] . "' >
                                                                                        <img class='icon_boton' src='" . constant('URL') . "/public/icon/png/CD_icon.png'></a>
                                                                                    ";
                                                                        }
                                                                        break;
                                                                    }
                                                                }
                                echo "                       </td>
                                                    </tr>

                                                </table> 

                                            </div> 

                                            <div class='card-body'>

                                                        <table class='table-sm table-bordered' style='width:100%'>

                                                            <tr>
                                                                <thead>
                                                                    <th scope='col' class='titulo_seccion' colspan='2'>Audiencia " . $audiencias_page['nombre'] . "</th>
                                                                </thead>
                                                            </tr>

                                                        <tr>
                                                            <th scope='row' class='titulo_datos'>Distrito:</th>
                                                                <td>" . $audiencias_page['distrito'] . "</td>																	
                                                        </tr>
                                                        <tr>
                                                            <th scope='row' class='titulo_datos' >Sala:</th>
                                                                <td>" . $audiencias_page['sala'] . "</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope='row' class='titulo_datos' >Reservada:</th>
                                                                <td>" . $audiencias_page['confidencialidad'] . "</td>																		
                                                        </tr>
                                                        <tr>
                                                            <th scope='row' class='titulo_datos' >Tipo de Audiencia:</th>
                                                                <td>" . $audiencias_page['tipoaudiencia'] . "</td>	
                                                        </tr>
                                                        <tr>
                                                            <th scope='row' class='titulo_datos' >Delito(s):</th>
                                                                <td>" . $audiencias_page['delito'] . "</td>	
                                                        </tr>
                                                        <tr>
                                                            <th scope='row' class='titulo_datos' >Encargado(a) de Sala:</th>
                                                                <td>" . $audiencias_page['encargado'] . "</td>	
                                                        </tr>
                                                        <tr>
                                                            <th  scope='row' class='titulo_datos'>Tipo de Juzgado:</th>
                                                                <td>" . $audiencias_page['tipojuzgado'] . "</td>	
                                                        </tr>

                                                        </table>
                                            </div>
                                            <div class='card-body'>
                                                    <table class='table-sm table-bordered' style='width:100%'>

                                                        <tr>
                                                                <thead>
                                                                    <th scope='col' class='titulo_seccion' colspan='2'>Intervinientes </th>
                                                                </thead>
                                                            <tr>
                                                                    <th scope='row' class='titulo_datos' >Juez(a):</th>
                                                                        <td>" . $audiencias_page['juez'] . "</td>
                                                                    </tr>
                                                            <tr>
                                                                    <th scope='row' class='titulo_datos'>Asistente:</th>
                                                                        <td width='100%'>" . $audiencias_page['asistente'] . "</td>	
                                                            </tr>
                                                            <tr>
                                                                    <th scope='row' class='titulo_datos'>V&iacute;ctima(s): </th>
                                                                        <td>" . $audiencias_page['victima'] . "</td>																
                                                            </tr>
                                                            <tr>
                                                                    <th scope='row' class='titulo_datos'>Asesor(es) Jurídico(s): </th>
                                                                        <td>" . $audiencias_page['asesor'] . "</td>																
                                                            </tr>
                                                            <tr>
                                                                    <th scope='row' class='titulo_datos'>Fiscal&iacute;a: </th>
                                                                        <td >" . $audiencias_page['fiscalia'] . "</td>	
                                                            </tr>
                                                            <tr>";
                                                        if ($tipoCarpeta == 'EJ') {
                                                            echo "<th scope='row' class='titulo_datos'>Sentenciado(s): </th>";
                                                        } else if ($tipoCarpeta == 'JO') {
                                                            echo "<th scope='row' class='titulo_datos'>Acusado(s): </th>";
                                                        } else {
                                                            echo "<th scope='row' class='titulo_datos'>Imputado(s): </th>";
                                                        }
                                                                echo "<td >" . $audiencias_page['imputado'] . "</td>																			
                                                            </tr>
                                                            <tr>
                                                                <th scope='row' class='titulo_datos'>Defensa: </th>
                                                                    <td >" . $audiencias_page['defensa'] . "</td>	
                                                            </tr>";
                                                if ($tipoCarpeta == 'EJ') {
                                                    echo "<th scope='row' class='titulo_datos'>Autoridad Penitenciaria: </th>
                                                                <td>" . $audiencias_page['aut_penitenciaria'] . "</td>	
                                                        </tr>";
                                                }
                                            echo " </table>

                                            </div>
                                </div>
                            </div>	
                        </div>	
                    </div>
                </div>
            </div>
            </td>
            </tr> 
    </tbody>               
</table>


";

echo "<hr>";  
echo "<br class='espacio'>";    
echo "<br class='espacio'>";
