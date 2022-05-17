<?php
//Incluimos inicialmenbte la conexion a la base de datos
require "../config/Conexion.php";
Class Area{
    //implementamos un constructor vacio 
    public function __construct()
    {
        
    }
    //implementamos un metodo para insertar datos a un registro

    public function insertar($nombre,){
        $sql = "INSERT INTO area(nombre, estado)
        VALUES('$nombre','1')";
        return ejecutarConsulta($sql);

    }

    //mpklementamos un metodo para editar el area 
    public function editar($idarea, $nombre){
        $sql="UPDATE area SET nombre ='$nombre' WHERE idarea=$idarea";
        return ejecutarConsulta($sql);
    }

    //Implementamos una funcion apra activar el area de trabajo 

    public function activar($idarea){
        $sql= "UPDATE area SET estado='1' WHRE idarea = $idarea";
        return ejecutarConsulta($sql);
    }

    //Implementamos una funcion para desactivar el 

    public function desactivar($idarea){
        $sql= "UPDATE area SET estado='0' WHRE idarea = $idarea";
        return ejecutarConsulta($sql);
    }

    //implementamos una funcio para mostrar las area de trabajo 

    public function mostrar($idarea){
        $sql= "SELECT * FROM area WHERE idarea = $idarea";
        return ejecutarConsultaSimpleFila($sql);
    }

    //Implementamos un metos para listar las areas de trabajo 

    public function listar(){
        $sql = "SELECT * FROM area";
        return ejecutarConsulta($sql);
    }

    //Implemnbtamos un metodo para listar los registors y mostrarlos en un select

    public function select(){
        $sql="SELECT * FROM area  WHERE estado = '1'";
        return ejecutarConsulta($sql);
    }

}
?>