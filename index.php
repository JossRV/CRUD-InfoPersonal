<?php 

    require "clases/conexion.php";
    require "clases/metodos.php";
    require "model/calcularEdad.php";

    $m=new metodos();
    $sql="SELECT * FROM t_infopersonal";
    $sqlSex="SELECT sexo FROM cat_sexo";
    $ver=$m->mostrarDatos($sql);
    $verSex=$m->mostrarDatos($sqlSex);
    $calc=new calcularEdad();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Personal</title>
    <?php include_once "app/dependencias.php" ?>
</head>
<body>
    <div class="container text-center border mt-5">
        <div class="row">
            <div class="col">
                <h2>Informacion personal del estudiante de sistemas</h2>
                <!-- formulario -->
                <form action="model/insertar.php" method="post" enctype="multipart/form-data">
                    <div class="container border mb-5">
                        <div class="row mt-3">
                            <div class="col">
                                <input class="form-control text-center" type="text" name="nombre" placeholder="Nombre" required>
                            </div>
                            <div class="col">
                                <input class="form-control text-center" type="text" name="apePaterno" placeholder="Apellido Paterno" required>
                            </div>
                            <div class="col">
                                <input class="form-control text-center" type="text" name="apeMaterno" placeholder="Apellido Materno" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input class="form-control text-center" type="text" name="matricula" placeholder="Matricula" required>
                            </div>
                            <div class="col">
                                <input class="form-control text-center" type="date" name="fechaNac" required>
                            </div>
                            <div class="col">
                                <input class="form-control text-center" type="text" name="especialidad" placeholder="Especialidad" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <select class="form-select text-center" name="sexo" required>
                                    <option value="">Sexo</option>
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
                                <!-- <input class="form-control text-center" type="file" name="imagen" placeholder="Imagen de Perfil" required> -->
                                <input class="form-control" type="file" name="imagen" placeholder="Imagen de perfil">
                            </div>
                            <div class="col"></div>
                        </div>
                        <div class="row mb-5 my-4">
                            <div class="col-3"></div>
                            <div class="col-6">
                                <button class="btn btn-outline-dark container-fluid">Guardar informacion</button>
                            </div>
                            <div class="col-3"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- tabla -->
        <div class="row me-1 ms-1 mb-4">
            <table class="table table-info table-bordered" >
                <thead >
                    <th>Paterno</th>
                    <th>Materno</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Matricula</th>
                    <th>Especialidad</th>
                    <th>Sexo</th>
                    <th>Imagen de Perfil</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                    <?php 
                        foreach($ver as $key):
                    ?>
                    <tr>
                        <td><?=$key['aPaterno']?></td>
                        <td><?=$key['aMaterno']?></td>
                        <td><?=$key['nombre']?></td>
                        <td><?=$edad=$calc->caluclar($key['fechaNac']);?></td>
                        <td><?=$key['Matricula']?></td>
                        <td><?=$key['especialidad']?></td>
                        <td><?=$key['sexo']?></td>
                        <td>
                            <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i class="fas fa-eye"></i></a>
                            <!-- <a href="./view/ver_imagenFull.php?id=<?//=$key['id_infoPersonal']?>"><i class="fas fa-eye"></i></a> -->
                        </td>
                        <td><a href="./model/eliminar.php?id=<?=$key['id_infoPersonal']?>"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    <?php 
                        endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- modal -->
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Imagen Full</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="img" id="img" style="height:100%; display:block; margin:auto"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>