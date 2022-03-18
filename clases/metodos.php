<?php 

    class metodos{
        public function mostrarDatos($sql){
            $c=new conexion();
            $conexion=$c->conectar();
            $resultado=mysqli_query($conexion,$sql);
            return mysqli_fetch_all($resultado,MYSQLI_ASSOC);
        }
        public function insertarDatos($datos){
            $c=new conexion();
            $conexion=$c->conectar();
            $sql="INSERT INTO t_infopersonal (nombre,aPaterno,aMaterno,Matricula,fechaNac,especialidad,sexo,Archivo)
                 VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]')";
            return $resultado=mysqli_query($conexion,$sql);
        }
        public function eliminarDatos($id){
            $c=new conexion();
            $conexion=$c->conectar();
            $sql="DELETE FROM t_infopersonal WHERE id_infoPersonal='$id'";
            return $resultado=mysqli_query($conexion,$sql);
        }
    }

?>