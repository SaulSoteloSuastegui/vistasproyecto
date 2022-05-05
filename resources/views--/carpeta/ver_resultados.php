<?php require 'views/header.php'; ?>

<input id="dir_url" type="hidden" value="<?php echo constant("URL"); ?>">
<link href="<?php echo constant("URL"); ?>public/css/jquery.datetimepicker.min.css" rel="stylesheet" />
<link href="<?php echo constant("URL"); ?>public/css/bootstrap-select/bootstrap-select.css" rel="stylesheet" />
<link href="<?php echo constant("URL"); ?>public/css/.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo constant("URL"); ?>public/js/jquery.datetimepicker.full.js" defer></script>

</head>

<?php
require_once 'public/php/pdoconnection.php';
$totalbusqueda = 0;
$complementoQuery = "";
$hayRestricciones = false;
$hayPrimerDato = false;
$restriccionesQuery = "";

switch ($_SESSION['tipo_usuario']) {
    case 'asistente':
        if (empty($_POST['tipo-nombrecarpeta']) && empty($_POST['cfecha'])) {
            $restriccionesQuery = " asistente like '%" . $_SESSION['nombre_usuario'] . "%' OR asistente IS NULL ";
        } else {
            $restriccionesQuery = " asistente like '%" . $_SESSION['nombre_usuario'] . "%' ";
        }
        $hayRestricciones = true;
        break;
    case 'encargado':
        if (empty($_POST['tipo-nombrecarpeta']) && empty($_POST['cfecha'])) {
            $restriccionesQuery = " encargado like '%" . $_SESSION['nombre_usuario'] . "%'  OR encargado IS NULL  OR encargado like '%Sin Especificar%' ";
        } else {
            $restriccionesQuery = " (encargado like '%" . $_SESSION['nombre_usuario'] . "%' OR encargado like '%Sin Especificar%' OR encargado IS NULL  ) ";
        }
        $hayRestricciones = true;
        break;
    case 'superencargado':
        if (empty($_POST['tipo-nombrecarpeta']) && empty($_POST['cfecha'])) {
            $restriccionesQuery = " encargado like '%Consuelo%' OR encargado like '%Óscar%' OR encargado like '%Sin Especificar%' ";
        } else {
            $restriccionesQuery = " (encargado like '%Consuelo%' OR encargado like '%Óscar%' OR encargado like '%Sin Especificar%' OR encargado IS NULL ) ";
        }
        $hayRestricciones = true;
        break;
    case 'spu':
        $restriccionesQuery = " tipojuzgado like '%Sala Penal Unitaria (SPU)%' ";
        $hayRestricciones = true;
        break;
}




if (!empty($_POST)) {

    //echo "Pase 1";
    $query = "";
    $informacionProporcionada = "";


    if (!empty($_POST['tipo-nombrecarpeta'])) {
        if ($hayPrimerDato) {
            $complementoQuery .= " AND ";
        }
        $nombrecarpeta = $_POST['tipo-nombrecarpeta'];
        $complementoQuery .=  " nombre like '%" . $nombrecarpeta . "%'";
        $informacionProporcionada .= "<strong  class='dato_importante_consulta'>Carpeta: </strong>" . $nombrecarpeta . ", ";
        $hayPrimerDato = true;
    }


    if (!empty($_POST['cfecha'])) {
        if ($hayPrimerDato) {
            $complementoQuery .= " AND ";
        }
        $fecha = $_POST['cfecha'];
        $complementoQuery .=  " fecha_c = '".$fecha."' ";
                        $divideFecha = explode("-", $fecha);	
                        $anno=$divideFecha[0];
                        $mes=$divideFecha[1];
                        $dia=$divideFecha[2];
                        
                        $mmes;
                        switch($mes){
                            case '01': $mmes='Enero';
                            break;
                            case '02': $mmes='Febrero';
                            break;
                            case '03': $mmes='Marzo';
                            break;
                            case '04': $mmes='Abril';
                            break;
                            case '05': $mmes='Mayo';
                            break;
                            case '06': $mmes='Junio';
                            break;
                            case '07': $mmes='Julio';
                            break;
                            case '08': $mmes='Agosto';
                            break;
                            case '09': $mmes='Septiembre';
                            break;
                            case '10': $mmes='Octubre';
                            break;
                            case '11': $mmes='Noviembre';
                            break;
                            case '12': $mmes='Diciembre';
                            break;
                            default: $mmes ='N/D'; 
                        }

                        $fechaEnEspannol=$dia .' de '. $mmes .' de '. $anno;
        $informacionProporcionada .= "<strong  class='dato_importante_consulta'>Fecha: </strong>" . $fechaEnEspannol . ", ";
        $hayPrimerDato = true;
    }

    if (!$complementoQuery == "") {

        if ($hayRestricciones) {
            $query = "SELECT * FROM audiencia WHERE " . $complementoQuery . " AND " . $restriccionesQuery;
        } else {
            $query = "SELECT * FROM audiencia WHERE " . $complementoQuery;
        }
        $query .= " ORDER BY id_audiencia DESC ";
        $querytotalresultados = $query;

        $contador = 0;
        //echo "";

        $_SESSION['info_proporcionada'] = $informacionProporcionada;
        $_SESSION['query_DConsulta'] = $querytotalresultados;
        $resultadodb = $db->query($querytotalresultados)->fetchAll();

        foreach ($resultadodb as $row => $fila) {
            $totalbusqueda++;
        }
        $_SESSION['totalbusqueda'] = $totalbusqueda;
        $num_total_rows = $totalbusqueda;
        $_SESSION['total_registros'] = $totalbusqueda;
    } else {
        //echo "Pase 2";
        $query = "SELECT * FROM audiencia ";

        if ($hayRestricciones) {
            $query = "SELECT * FROM audiencia WHERE " . $restriccionesQuery;
        }
        $query .= " ORDER BY id_audiencia DESC ";
        $resultadodb = $db->query($query)->fetchAll();
        foreach ($resultadodb as $row => $fila) {
            $totalbusqueda++;
        }
        $_SESSION['totalbusqueda'] = $totalbusqueda;
        $_SESSION['query_DConsulta'] = $query;
        $_SESSION['info_proporcionada'] = "";
        $_SESSION['total_registros'] = $totalbusqueda;
    }
}

?>

<?php
include_once 'resultados.php';

$resultadosDeConsulta = new Resultados(constant('NUM_RESULTADOS_CONSULTA'), $_SESSION['totalbusqueda']);


echo "<div class='jumbotron p-3 bg-company-violet text-center text-light shadow-lg rounded mb-0 pb-0 pt-0 mt-0'>";
echo     "<div class='_fuenteadvertencia'> Se han encontrado " . $_SESSION['totalbusqueda'] . " Audiencia(s) " . $_SESSION['info_proporcionada'] . "</div>";
echo "   </div>";

?>

<div id="contenedor_pages">
    <div class='container'>
        <div id="paginas" class="text-center">
            <?php
            
            $resultadosDeConsulta->mostrarPaginas();
            ?>
        </div>
    </div>
    <div class="mt-4 mb-4 pt-2 pb-2">
        <?php

        echo " <div class='container'>";
        $resultadosDeConsulta->mostrarAudiencias($_SESSION['query_DConsulta']);
        echo " </div>"
        ?>
    </div>
    <div class='container'>
        <div id="paginas" class="text-center">
            <?php
            $resultadosDeConsulta->mostrarPaginas();
            ?>
        </div>
    </div>
</div>
<?php
$db = null;
?>
<?php
setlocale(LC_ALL, "es-MX");
if ($_SESSION['tipo_usuario'] != 'adminsitio') {
    echo "<link rel='stylesheet' href='" . constant('URL') . "public/css/video_no_download_config.css'>";
}

?>
<script type="text/javascript">
    $('#idlink').click(function(event) {
        $heightDown = $(window).height() - $('#header').height();

        $('html, body').animate({
            scrollTop: $heightDown
        }, 2000);
    });
</script>


</div>


<link rel="stylesheet" type="text/css" media="screen" href="<?php echo constant('URL');?>public/css/default_busqueda.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo constant('URL');?>public/css/resultados_page.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo constant('URL');?>public/css/video_no_download_config.css" defer/>

<script type="text/javascript" src="<?php echo constant("URL"); ?>public/js/eliminar_registros.js" defer></script>
<?php require 'views/footer.php'; ?>