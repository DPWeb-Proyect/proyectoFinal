<?php 
header("Content-Type: text/html;charset=utf-8");
    $u='ottos_25603395';
    $s='sql211.tonohost.com';
    $c="Densoutil35";
    $d="ottos_25603395_DepWeb";

    $conex= new mysqli($s,$u,$c,$d);    
    $conex->query("SET NAMES 'UTF8'");
    if($conex->connect_errno){
        die ("Fallo al conectar a MySQL: (" . $conex->connect_errno . ") " . $conex->connect_error);
    }else{        
        echo "Conexion establecida";
    }
?>