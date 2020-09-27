<?php 

class Conexion{
    private static function conectar(){
        $mysqli = new mysqli('localhost', 'root', '', 'colores');
        return $mysqli; 
    }

    public static function consultarSQL($sql){
        $mysql = self::conectar();
        if($mysql->connect_errno){
            die('Hubo un fallo en la conexión!');
        }else{
            $resultados = $mysql->query($sql);
            if($resultados->num_rows){
                return $resultados;
            }
        }
    }
}

$resultados = Conexion::consultarSQL('SELECT * FROM color');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    extract($_POST);
    $res = Conexion::consultarSQL(
        "SELECT * FROM color WHERE id=$id"
    );    
     echo json_encode($res->fetch_assoc());
}
