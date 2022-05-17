<?php
require_once"global.php";
$conexion = new mysqli(DB_HOST, DB_USERNAME,DB_PASSWORD,DB_NAME);
mysqli_query($conexion, 'SET NAMES"'.DB_ENCODE.'"');

//si tenemos un posible error en la conexion de la base de datos lo mostarmos

if(mysqli_connect_errno())
{
    printf("Fallo la conexion a la base de datos: %s\n",mysqli_connect_error() );
    exit();
}else 
{
    printf("conexion exitosa");
}

//condicional para ejecutar una consulta
if (!function_exists('ejecutarConsulta')) {
    # code...
    function ejecutarConsulta($sql){
        global $conexion;
        $query= $conexion->query($sql);
        return $query;
    }

    //funcion par buscar ejecutar un consulta simple de una fila

    function ejecutarConsultaSimpleFila($sql){
        global $conexion;
        $query = $conexion->query($sql);
        $row=$query->fetch_assoc();
        return $row;
    }

    //funcion [ara copnsultar _etornar un Id]
    function ejecutarConsulta_retornarId($sql){
        global $conexion;
        $query = $conexion->query($sql);
        return $conexion->insert_id;
    }

    function limpiarCadena($str){
        global $conexion;
        $str = mysqli_real_escape_string($conexion,trim($str));
        return htmlentities($str);
    }
}
?>