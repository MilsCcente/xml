<?php
$xml = simplexml_load_file('ies_db.xml') or die("Error: nose cargo correctamente el archivo XML");

//echo $xml->pe1->nombre . "<br>";
//echo $xml->pe2->nombre . "<br>";

foreach ($xml as $i_pe => $pe) {
    echo 'Código: ' . $pe->codigo . "<br>";
    echo 'Tipo: ' . $pe->tipo . "<br>";
    echo 'Nombre: ' . $pe->nombre . "<br>";

    foreach ($pe->planes_estudio[0] as $i_ple => $plan) {
        echo '--> Plan de estudio: ' . $plan->nombre . "<br>";
        echo '--> Resolución: ' . $plan->resolucion . "<br>";
        echo '--> Fecha de registro: ' . $plan->fecha_registro . "<br>";

        // $consulta = "INSERT INTO sigi_planes_estudio (nombre, resolucion, fecha_registro, id_programa_estudios) VALUES ('".$plan->nombre."', '".$plan->resolucion."', '".$plan->fecha_registro."', ".$pe['id'].")";

        foreach ($plan->modulos_formativos[0] as $id_mod => $modulo) {
            echo '----> Módulo: ' . $modulo->descripcion . "<br>";
            echo '----> Número de módulo: ' . $modulo->nro_modulo . "<br>";
        }
    }
}
