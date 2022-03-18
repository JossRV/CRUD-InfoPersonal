<?php 

    require "../clases/conexion.php";
    require "../clases/metodos.php";
    require "calcularEdad.php";
    
    $nombre=$_POST['nombre'];
    $paterno=$_POST['apePaterno'];
    $materno=$_POST['apeMaterno'];
    $fechaNacimiento=$_POST['fechaNac'];
    $matricula=$_POST['matricula'];
    $especialidad=$_POST['especialidad'];
    $sexo=$_POST['sexo'];
    $origen=$_FILES['imagen']['tmp_name'];
    $destino="../archivos/".$_FILES['imagen']['name'];
    $nameArchivo=$_FILES['imagen']['name'];
    move_uploaded_file($origen,$destino);
    // $calc=new calcularEdad();
    $obj=new metodos();

    // $edad=$calc->caluclar($fechaNacimiento);

    $datos=array(
        $nombre,
        $paterno,
        $materno,
        $matricula,
        $fechaNacimiento,
        $especialidad,
        $sexo,
        $nameArchivo
    );
    // echo $calc->caluclar($fechaNacimiento);
    // 
    if($obj->insertarDatos($datos)==1){
        header("location: ../index.php");
    }else{
        echo "no se agrego correctamente";
    }

?>