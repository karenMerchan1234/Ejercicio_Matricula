<?php

//datos del estudiante//

if(!empty($_POST['nombre'])){

$nombre=$_POST['nombre'];
echo "El estudiante es: ".$nombre;
$apellido=$_POST['apellidos'];
$resultado ="Nombre:".$nombre."-"."Apellido:".$apellido;
echo$resultado;






if(!empty( $_POST['escoger']));
$arrPrimero_A = array('Danzas', 'Teatro', 'Musica');
$arrPrimero_B = array('Danzas',  'Musica');//arrPrimero_C = array('Teatro', 'Dibujo', 'Musica');


$arrSegundo_A = array('Teatro', 'Dibujo');
$arrSegundo_A = array('Teatro', 'Musica');



if($opcion== 'Primero_A'){
		$arrRecorrer = $arrPrimeroA;
}else if ($opcion == 'Primero_B'){

		$arrRecorrer = $arrPrimero_B;

	}else if ($opcion == 'Primero_C'){

		$arrRecorrer = $arrPrimero_C;

}
$opcion.="<Select id='opcion' name='Nombre'>";

 foreach ($arrRecorrer as $Nombre ) {
 	$opcion .= "<option value=".$nombre.">".$nombre."</option>";
	}
	$opcion .= "</select>";
	
	echo $opcion;


 	
 }

?>