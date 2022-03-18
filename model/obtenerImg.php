<?php 

include "../clases/conexion.php";
include "../clases/metodos.php";
        $id=$_POST['id'];
        // echo $id;
        $sql="SELECT * FROM t_infopersonal WHERE id_infoPersonal='$id'";
        $m=new metodos();
        $verImg=$m->mostrarDatos($sql);

        foreach($verImg as $key){
            echo $nameImg=$key['Archivo'];
        }
        // return $nameImg;

?>