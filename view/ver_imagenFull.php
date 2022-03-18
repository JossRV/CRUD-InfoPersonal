<?php 

    include "../clases/conexion.php";
    include "../clases/metodos.php";

    $idImg=$_GET['id'];
    $sql="SELECT Archivo FROM t_infopersonal WHERE id_infoPersonal='$idImg'";
    $m=new metodos();
    $verImg=$m->mostrarDatos($sql);

    // foreach($verImg as $key){
        // echo "";
    // }
    

?>
<style>
    .imagen{
        /* width: 50%;  */
        height: 100%;
        display:block;
        margin:auto;
    }
</style>
<?php 
    foreach($verImg as $key):
?>
    <img src="../archivos/<?=$key['Archivo']?>" alt="perfil" class="imagen" >
    <!-- en html tambien usar asi width="50%" funciona correctamente xd -->
<?php 
    endforeach;
?>