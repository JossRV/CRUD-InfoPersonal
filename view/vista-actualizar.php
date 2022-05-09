<?php 

    require "../clases/conexion.php";
    require "../clases/metodos.php";
    require "../model/calcularEdad.php";

    $id=$_GET['id'];
    $c=new conexion();
    $m=new metodos();
    $conexion=$c->conectar();
    $sql="SELECT * FROM t_infopersonal WHERE id_infoPersonal='$id'";
    $sqlSex="SELECT sexo FROM cat_sexo";
    $resul=mysqli_query($conexion,$sql);
    $verSex=$m->mostrarDatos($sqlSex);
    $ver=mysqli_fetch_row($resul);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <?php include "../app/dependenciasForaneas.php"; ?>
</head>

<body>
    <div class="container text-center border mt-5">
        <div class="row">
            <div class="col">
                <h2>Informacion personal del estudiante de sistemas</h2>
                <!-- formulario -->
                <form action="../model/actualizar.php" method="post" enctype="multipart/form-data">
                    <div class="container border mb-5">
                        <div class="row mt-3">
                            <div class="col">
                                <input class="form-control text-center" type="text" name="nombre" value="<?=$ver['1']?>"
                                    required>
                            </div>
                            <div class="col">
                                <input class="form-control text-center" type="text" name="apePaterno" value="<?=$ver['2']?>"
                                    placeholder="Apellido Paterno" required>
                            </div>
                            <div class="col">
                                <input class="form-control text-center" type="text" name="apeMaterno" value="<?=$ver['3']?>"
                                    placeholder="Apellido Materno" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input class="form-control text-center" type="text" name="matricula" value="<?=$ver['4']?>"
                                    placeholder="Matricula" required>
                            </div>
                            <div class="col">
                                <input class="form-control text-center" type="date" name="fechaNac" value="<?=$ver['5']?>" required>
                            </div>
                            <div class="col">
                                <input class="form-control text-center" type="text" name="especialidad" value="<?=$ver['6']?>"
                                    placeholder="Especialidad" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <select class="form-select text-center" name="sexo" required>
                                    <option value="<?=$ver['7']?>"><?=$ver['7']?></option>
                                    <?php 
                                    foreach($verSex as $key):
                                ?>
                                    <option value="<?=$key['sexo']?>"><?=$key['sexo']?></option>
                                    <?php 
                                    endforeach;
                                ?>
                                </select>
                            </div>
                            <div class="col">
                                <input class="form-control" type="file" name="imagen" value="<?=$ver['8']?>">
                            </div>
                            <div class="col">
                                <div class="form-input">

                                </div>
                            </div>
                        </div>
                        <div class="row mb-5 my-4">
                            <div class="col-3"></div>
                            <div class="col-6">
                                <button class="btn btn-outline-dark container-fluid">Actualizar informacion</button>
                            </div>
                            <div class="col-3"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>