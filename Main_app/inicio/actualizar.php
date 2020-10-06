<?php
$conexion = mysqli_connect('localhost','id10903101_root','ecoparque','id10903101_ecoparque');
$conexion2 = mysqli_connect('localhost','id10903101_root','ecoparque','id10903101_ecoparque');
 if ( isset($_POST['titulo_1']))
    {

$titulo =$_POST['titulo_1'];
$mensaje=$_POST['message'];

$ficha=$_POST['ficha1'];
$ficha11=$_POST['ficha11'];

$ficha2=$_POST['ficha2'];
$ficha21=$_POST['ficha21'];
$ficha22=$_POST['ficha22'];

$ficha3=$_POST['ficha3'];
$ficha31=$_POST['ficha31'];
$ficha32=$_POST['ficha32'];
$ficha33=$_POST['ficha33'];

$ficha4=$_POST['ficha4'];
$ficha41=$_POST['ficha41'];
$ficha42=$_POST['ficha42'];
$ficha43=$_POST['ficha43'];
$ficha44=$_POST['ficha44'];
 mysqli_query($conexion2, "UPDATE contenido SET titulo_1 = '$titulo', mensaje_1 = '$mensaje', pre_titulo = '$ficha', pre_mensaje= '$ficha11', ub_titulo='$ficha2', ub_mensaje='$ficha21', ub_mensaje2='$ficha22', per_titulo='$ficha3', per_mensaje1='$ficha31', per_mensaje2='$ficha32', per_mensaje3='$ficha33', inf_titulo='$ficha4', inf_mensaje1='$ficha41', inf_mensaje2='$ficha42', inf_mensaje3='$ficha43', inf_mensaje4='$ficha44'");
				mysqli_close($conexion2);
				
header('Location: index.php');
}

if ( isset($_POST['aclogo']))
    {
 foreach($_FILES["input-b6"]['tmp_name'] as $key => $tmp_name)
	{
		//Validamos que el archivo exista
		if($_FILES["input-b6"]["name"][$key]) {
			$filename = $_FILES["input-b6"]["name"][$key]; //Obtenemos el nombre original del archivo
			$source = $_FILES["input-b6"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
			
			$directorio = '../../img/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
			
			//Validamos si la ruta de destino existe, en caso de no existir la creamos
			if(!file_exists($directorio)){
				mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");	
			}
			
			$dir=opendir($directorio); //Abrimos el directorio de destino
			$target_path = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
			$imgbd='img/'.$filename;
			//Movemos y validamos que el archivo se haya cargado correctamente
			//El primer campo es el origen y el segundo el destino
			if(move_uploaded_file($source, $target_path)) {	
				

				mysqli_query($conexion, "UPDATE contenido SET logo = '$imgbd'");
				mysqli_close($conexion);
            }

				} else {	
				echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
			}
			closedir($dir); //Cerramos el directorio de destino
		}
		header('Location: index.php');
}



if ( isset($_POST['titulo_ben']))
    {

    	$titulo_ben =$_POST['titulo_ben'];
		$sub1=$_POST['sub1'];
		$sub2=$_POST['sub2'];
		$sub3=$_POST['sub3'];
		$sub4=$_POST['sub4'];
		$men1=$_POST['men1'];
		$men2=$_POST['men2'];
		$men3=$_POST['men3'];
		$men4=$_POST['men4'];


		mysqli_query($conexion, "UPDATE contenido SET titulo_beneficios = '$titulo_ben', op_titulo1 = '$sub1', op_mensaje1 = '$men1', op_titulo2= '$sub2', op_mensaje2='$men2', op_titulo3='$sub3', op_mensaje3='$men3', op_titulo4='$sub4', op_mensaje4='$men4'");
mysqli_close($conexion);
header('Location: index.php');
}






?>


