<?php 

    require "../clases/conexion.php";
    require "../clases/metodos.php";

    $id=$_GET['id'];
    $obj=new metodos();
    $sql="SELECT Archivo FROM t_infopersonal WHERE id_infoPersonal='$id'";
    $ver=$obj->mostrarDatos($sql);
    // unlink("archivos/".$ver);
    foreach($ver as $key){
        unlink("../archivos/".$key['Archivo']);
    }
    
    if($obj->eliminarDatos($id)==1){
        header("location: ../index.php");
    }else{
        echo "no se ha eliminado";
    }

?>