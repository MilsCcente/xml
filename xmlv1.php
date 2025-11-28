<?php
$ies = [];


$udp1 = [
    'FUNDAMENTOS DE PROGRAMACIÓN',
    'REDES E INTERNET',
    'ANÁLISIS Y DISEÑO DE SISTEMAS',
    'INTRODUCCIÓN DE BASE DE DATOS',
    'ARQUITECTURA DE COMPUTADORAS',
    'COMUNICACIÓN ORAL',
    'APLICACIONES EN INTERNET',
];
$udp2 = [
    'OFIMÁTICA',
    'INTERPRETACIÓN Y PRODUCCIÓN TEXTOS',
    'METODOLOGÍA DE DESARROLLO DE SOFTWARE',
    'PROGRAMACIÓN ORIENTADA A OBJETOS',
    'ARQUITECTURA DE SERVIDORES WEB',
    'APLICACIONES SISTEMATIZADAS',
    'TALLER DE BASE DE DATOS',
];
$udp3 = [
    'ADMINISTRACIÓN DE BASE DE DATOS',
    'PROGRAMACIÓN DE APLICACIONES WEB',
    'DISEÑO DE INTERFACES WEB',
    'PRUEBAS DE SOFTWARE',
    'INGLÉS PARA LA COMUNICACIÓN ORAL',
];
$udp4 = [
    'DESARROLLO DE ENTORNOS WEB',
    'PROGRAMACIÓN DE SOLUCIONES WEB',
    'PROYECTOS DE SOFTWARE',
    'SEGURIDAD EN APLICACIONES WEB',
    'COMPRENSIÓN Y REDACCIÓN EN INGLÉS',
    'COMPORTAMIENTO ÉTICO',
];
$udp5 = [
    'PROGRAMACIÓN DE APLICACIONES MÓVILES',
    'MARKETING DIGITAL',
    'DISEÑO DE SOLUCIONES WEB',
    'GESTIÓN Y ADMINISTRACIÓN DE SITIOS WEB',
    'DIAGRAMACIÓN DIGITAL',
    'SOLUCIÓN DE PROBLEMAS',
    'OPORTUNIDADES DE NEGOCIOS',
];
$udp6 = [
    'PLATAFORMA DE SERVICIOS WEB',
    'ILUSTRACIÓN Y GRÁFICA DIGITAL',
    'ADMINISTRACIÓN DE SERVIDORES WEB',
    'COMERCIO ELECTRÓNICO',
    'PLAN DE NEGOCIOS',
];

// =================PERIODOS===================

//  PERIODO 1  
$p1 = [];
$p1['nombre'] = "I";
$p1['unidades_didacticas'] = $udp1;

//  PERIODO 2  
$p2 = [];
$p2['nombre'] = "II";
$p2['unidades_didacticas'] = $udp2;
//  PERIODO 3  
$p3 = [];
$p3['nombre'] = "III";
$p3['unidades_didacticas'] = $udp3;

//  PERIODO 4 
$p4 = [];
$p4['nombre'] = "IV";
$p4['unidades_didacticas'] = $udp4;

//  PERIODO 5  
$p5 = [];
$p5['nombre'] = "V";
$p5['unidades_didacticas'] = $udp5;

//  PERIODO 6 
$p6 = [];
$p6['nombre'] = "VI";
$p6['unidades_didacticas'] = $udp6;

// =================MODULOS===================
$m1 = array();
$m1 ['nombre'] = "ANÁLISIS Y DISEÑO DE SISTEMAS WEB";
$m1 ['periodos']= [$p1, $p2];

$m1 = array();
$m1['nombre'] = "ANALISIS Y DISEÑO DE SISTEMAS WEB";
$m1['periodos'] = array($p1, $p2);

$m2 = array();
$m2['nombre'] = "DESARROLLO DE APLICACIONES WEB";
$m2['periodos'] = array($p3, $p4);

$m3 = array();
$m3['nombre'] = "DISEÑO DE SERVICIOS WEB";
$m3['periodos'] = array($p5, $p6);

//------------PROGRAMAS DE ESTUDIO-------------------

$pe1 =array();
$pe1['nombre'] = "DISEÑO Y PROGRAMACION WEB";
$pe1['modulos'] = [$m1, $m2, $m3];

$pe2 =array();
$pe2['nombre'] = "ENFERMERÍA TÉCNICA";
$instituto[] =  [$m1, $m2, $m3];

$pe3 =array();
$pe3['nombre'] = "MECATRÓNICA AUTOMOTRIZ";
$instituto[] =  [$m1, $m2, $m3];

$pe4 =array();
$pe4['nombre'] = "INDUSTRIAS DE ALIMENTOS Y BEBIDAS";
$instituto[] =  [$m1, $m2, $m3];

$pe5 =array();
$pe5['nombre'] = "PRODUCCIÓN AGROPECUARIA";
$instituto[] =  [$m1, $m2, $m3];

$ies['nombre'] = "IES Público HUANTA";
$ies['programas_estudio'] = [$pe1, $pe2, $p3, $pe4, $pe5];


$xml = new DOMDocument('1.0', 'UTF-8');
$xml->formatOutput = true;

$et1 = $xml->createElement('ies');
$xml->appendChild($et1);

    $nombre_ies = $xml->createElement('nombre', $ies['nombre']);
    $programas_estudio = $xml->createElement('programas_estudio');
    foreach($ies["programas_estudio"] as $PEs) { 
        $cont_pe++;
        $num_pe = $xml->createElement("pe", $cont_pe);
        $programas_estudio= $xml->createElement('nombre', $PEs['nombre']);
        $nombre_pe->appendChild($nombre_pe);

    }


$archivo = "ies.xml";
$xml->save($archivo);


print_r($pe1)
?> 