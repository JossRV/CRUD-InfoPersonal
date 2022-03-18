<?php 

    class calcularEdad{
        public function caluclar($fechaNac){
            list($anio,$mes,$dia)=explode("-",$fechaNac);
            $anio_diferencia  = date("Y") - $anio;
            $mes_diferencia = date("m") - $mes;
            $dia_diferencia   = date("d") - $dia;
            if ($dia_diferencia < 0 || $mes_diferencia < 0)
                $anio_diferencia--;
            return $anio_diferencia;
        }
    }

?>