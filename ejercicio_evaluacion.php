<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio_evalucion</title>
<meta charset ="UFP-8">
</head>
<body>
<h1> EJERCICIO_EVALUCION</h1><br>

<!ingresar datos-->
<form  method="POST" action="#">
 <fielset name="nombreCompleto">
<legend>  <H1>DATOS ESTUDIANTE:</H1></legend>
 Ingrese su Nombre <input type="text" name="nombre" id="nombre" placeholder="Nombre"  >
 <br></br>
 Ingrese su Apellido:<input type="text" name="apellidos" id="apellidos" placeholder="Apellido">
 <br></br>
 Ingrese su valor base: <input type="text" name="valor_base" id="valor_base" placeholder="valor">
</fielset>
 <input type="submit" value="enviar">

</form><br/>


<!escoger grado-->

<form action="escoger">
		<strong> CURSOS PRIMEROS: </strong>
		<select id="select opcion" name="select opcion">
			<option value="Seleccione">Seleccione</option>
			<option value="PrimeroA"> primero A</option>
             <option value="PrimeroB"> Primero B</option>
			<option value="PrimeroC">Primero C</option>
		</select>
		<div id="resultado"></div>
</form><br></br>


<form action="escoger">
		<strong> MATERIAS: </strong>
		<select id="select opcion" name="select opcion">
			<option value="Seleccione">Seleccione</option>
			<option value="A"> 'Danzas', 'Teatro', 'Musica'</option>
             <option value="B">'Danzas',  'Musica' </option>
			<option value="C">'Teatro', 'Dibujo', 'Musica'</option>
		</select>
		<div id="resultado"></div>
</form><br></br>


<form action="escoger1">
		<strong> CURSOS SEGUNDOS: </strong>
		<select id="select opcion" name="select opcion">
			<option value="Seleccione">Seleccione</option>
			<option value="segundo A"> segundo A</option>
			<option value="segundo C">segundo C</option>
		</select>
		<div id="resultado"></div>
</form> <br></br>


<form action="escoger">
		<strong> MATERIAS: </strong>
		<select id="select opcion" name="select opcion">
			<option value="Seleccione">Seleccione</option>
			<option value="A"> 'Teatro', 'Dibujo'</option>
            <option value="C">'Teatro',  'Musica'</option>
		</select>
		<div id="resultado"></div>
</form><br></br>

<input type="submit" value="enviar">


<script>

		//Funcion de JQuery
		$( "#selectGrado").change(function() {
			var grado = $("#opcion").val();
			$.ajax({
				method: "POST",
				url: "formurario.php",
				data: { MATERIAS: MATERIAS}
			})
			.done(function( msg ) {
				$("#resultado").html(msg);
			});
		});
	</script>






 	
 }

?>



</body>
</html>