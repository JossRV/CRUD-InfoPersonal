<?php 

    class conexion{
        public function conectar(){
            $servidor="localhost";
            $user="root";
            $password="";
            $bd="infopersonal";

            $conexion=new mysqli(
                $servidor,
                $user,
                $password,
                $bd
            );
            return $conexion;
        }
    }
    
    // $c=new conexion();
    // if($c->conectar()){
    //     echo "conectado con exito";
    // }

?>