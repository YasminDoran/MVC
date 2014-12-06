<?php
$titulo = 'Bienvenido a su examen';
$contenido = 'Aqui se encuentra el listado de preguntas';//puede ser una consulta

$examen = new question();
$variables = array ('titulo'=>$titulo,'contenido'=>$contenido,'examen'=>$examen->muestraPreguntas());
view('examen',$variables);