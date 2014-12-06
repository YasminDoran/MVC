<?php
class question{
    private $name;
    private $idp;
    private $preg;
    private $respuesta;
    private $respuesta1;

    public function getUsusaio(){
        echo"<br>mostrar ususario ".$this->name;
    }
    public function setUsuario(){
        $this->name = "informacion de la clase NSN ";
        return $this->name;
    }
    public function consultaGeneral(){
        $sql01="SELECT * FROM usuario  ORDER BY id ASC";
        $consulta = mysql_query($sql01) or die ("error consulta general");
        echo "<div class=table-resposive align=center>";
        echo "<table class=\*table table-striped\ border=1>";
        echo "<tr><td colspan=5 align=center>Resultados</td></tr>";
        echo"<tr><td>Numero</td><td>Nombre(s)</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Nivel</td>";
        while($field = mysql_fetch_array($consulta)){
            $this->IdPersona = $field['id'];
            $this->Nombre = $field['nombre'];
            $this->ApellidoPaterno = $field['ApellidoPaterno'];
            $this->ApellidoMaterno = $field['ApellidoMaterno'];
            $this->Nivel = $field['nivel'];
            switch($this->Nivel){
                case 1:
                    $type = "Administrador";
                    break;
                case 2:
                    $type = "Maestro";
                    break;
                case 3:
                    $type = "Alumno";
                    break;
            }
            echo "<tr><td>$this->IdPersona</td><td>$this->Nombre</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td><td>$type</td></tr>";
        }
        echo "</table>";
        echo "</div>";
    }
    public function muestraPreguntas (){
        $sql=" SELECT idp, preg, respuesta, respuesta1 FROM cuestionario  order by idp";
        echo "hola yasmin";
        $result0 = mysql_query($sql) or die ("Error $sql");
        echo"<div class=table-responsive>";
        echo"<table class=\"table table-striped\">";
        echo"<tr><td colspan='4' align='center'><strong>CUESTIONARIO</strong></td></tr>";
        echo"<tr><td>Numero pregunta</td><td>Pregunta</td><td>Respuesta 1</td><td>Respuesta 2</td></tr>";
        while($field = mysql_fetch_array($result0)){
            $this->idp = $field['idp'];
            $this->preg= $field['preg'];
            $this->respuesta= $field['respuesta'];
            $this->respuesta1 = $field['respuesta1'];
            echo"<tr><td>$this->idp</td><td>$this->preg</td><td>$this->respuesta</td><td>$this->respuesta1</td></tr>";
        }
        echo"</table>";
        echo"</div>";
    }
}