<!DOCTYPE html>
<html>
<head>
	<title>Panel de Control</title>

	    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	  	<script src="js/jquery.min.js"></script>
        <script src="js/fileinput.min.js" type="text/javascript"></script></head>
<?php
 include("../conexion.php");
  
$consulta = "SELECT * FROM contenido";
$resultado = mysqli_query($mysqli, $consulta);
while($fila = mysqli_fetch_array($resultado))
{


?>
<body>
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#" style="font-family: arial;">Panel de control Ecoparque Industrial</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../salir.php">Cerrar Sesión <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
   
  </div>
</nav>
<p>
<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Sección Nosotros
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      
     
	<div class="container-contact100">
		<div class="wrap-contact100">
<form class="contact100-form " name="form2" action="actualizar.php" method="POST" enctype="multipart/form-data">
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Introducir ficha 1">
					<span class="label-input100">Logo *</span>
					<img style="width: 236px; height: 74px;" src="<?php echo  '../../'.$fila['logo'];?>">
					<input id="aclogo" name="aclogo" type="hidden" value="aclogo">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Introducir ficha 1">
					<span class="label-input100"></span>
					<input id="input-b6" name="input-b6[]" type="file" required >
					<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Cambiar logo
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
				</div>
				</form>

			<form class="contact100-form " name="form2" action="actualizar.php" method="POST" enctype="multipart/form-data">
				
				
				
				<div class="file-loading"> 
    			

				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">Título #1 *</span>
					<input class="input100" type="text" value="<?php echo $fila['titulo_1'];?>" id="titulo_1" name="titulo_1" placeholder="Introducir Título" required >
				</div>

				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Mensaje #1</span>
					<textarea class="input100" name="message" id="message" placeholder="Your message here..." required><?php echo  $fila['mensaje_1'];?></textarea>
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Introducir ficha 1">
					<span class="label-input100">Ficha #1 *</span>
					<input class="input100" type="text" value="<?php echo  $fila['pre_titulo'];?>" name="ficha1" placeholder="Introducir Ficha #1 " required>
				</div>
					<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Mensaje Ficha #1</span>
					<textarea class="input100" name="ficha11" placeholder="Your message here..." required><?php echo  $fila['pre_mensaje'];?></textarea>
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Introducir ficha 1">
					<span class="label-input100">Ficha #2 *</span>
					<input class="input100" type="text" value="<?php echo $fila['ub_titulo'];?>" name="ficha2" placeholder="Introducir Ficha #1 " required>
				</div>
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Mensaje Ficha #2.1</span>
					<textarea class="input100" name="ficha21" placeholder="Your message here..." required><?php echo $fila['ub_mensaje'];?></textarea>
				</div>
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Mensaje Ficha #2.2</span>
					<textarea class="input100" name="ficha22" placeholder="Your message here..." required><?php echo $fila['ub_mensaje2'];?></textarea>
				</div>
					<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Introducir ficha 1">
					<span class="label-input100">Ficha #3 *</span>
					<input class="input100" type="text" value="<?php echo $fila['per_titulo'];?>" name="ficha3" placeholder="Introducir Ficha #1 " required>
				</div>
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Mensaje Ficha #3.1</span>
					<textarea class="input100" name="ficha31"  placeholder="Your message here..." required><?php echo $fila['per_mensaje1'];?></textarea>
				</div>
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Mensaje Ficha #3.2</span>
					<textarea class="input100" name="ficha32"  placeholder="Your message here..." required><?php echo $fila['per_mensaje2'];?></textarea>
				</div>
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Mensaje Ficha #3.3</span>
					<textarea class="input100" name="ficha33" placeholder="Your message here..." required><?php echo $fila['per_mensaje3'];?></textarea>
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Introducir ficha 1">
					<span class="label-input100">Ficha #4 *</span>
					<input class="input100" type="text" value="<?php echo  $fila['inf_titulo'];?>" name="ficha4" placeholder="Introducir Ficha #1 " required>
				</div>
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Mensaje Ficha #4.1</span>
					<textarea class="input100" name="ficha41" placeholder="Your message here..." required><?php echo $fila['inf_mensaje1'];?></textarea>
				</div>
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Mensaje Ficha #4.2</span>
					<textarea class="input100" name="ficha42" placeholder="Your message here..." required><?php echo $fila['inf_mensaje2'];?></textarea>
				</div>
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Mensaje Ficha #4.3</span>
					<textarea class="input100" name="ficha43" placeholder="Your message here..." required><?php echo $fila['inf_mensaje3'];?></textarea>
				</div>
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Mensaje Ficha #4.4</span>
					<textarea class="input100" name="ficha44" placeholder="Your message here..." required><?php echo $fila['inf_mensaje4'];?></textarea>
				</div>





				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Actualizar
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>


      
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         Sección Beneficios
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
     

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form " action="actualizar.php" method="POST">
							<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">Título *</span>
					<input class="input100" type="text" name="titulo_ben" placeholder="Introducir texto" value="<?php echo $fila['titulo_beneficios'];?>" required>
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Escribir Mensaje">
					<span class="label-input100">Subtitulo #1 *</span>
					<input class="input100" type="text" name="sub1" value="<?php echo $fila['op_titulo1'];?>" placeholder="Introducir Mensaje " required>
				</div>
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Mensaje </span>
					<textarea class="input100" name="men1" placeholder="Your message here..." required><?php echo $fila['op_mensaje1'];?></textarea>
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Escribir Mensaje">
					<span class="label-input100">Subtitulo #2 *</span>
					<input class="input100" type="text" name="sub2" value="<?php echo $fila['op_titulo2'];?>" placeholder="Introducir Mensaje " required>
				</div>
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Mensaje </span>
					<textarea class="input100" name="men2" placeholder="Your message here..." required><?php echo $fila['op_mensaje2'];?></textarea>
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Escribir Mensaje">
					<span class="label-input100">Subtitulo #3 *</span>
					<input class="input100" type="text" name="sub3" value="<?php echo $fila['op_titulo3'];?>" placeholder="Introducir Mensaje " required>
				</div>
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Mensaje </span>
					<textarea class="input100" name="men3" placeholder="Your message here..." required><?php echo $fila['op_mensaje3'];?></textarea>
				</div>
<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Escribir Mensaje">
					<span class="label-input100">Subtitulo #4 *</span>
					<input class="input100" type="text" name="sub4" value="<?php echo $fila['op_titulo4'];?>" placeholder="Introducir Mensaje " required>
				</div>
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Mensaje </span>
					<textarea class="input100" name="men4" placeholder="Your message here..." required><?php echo $fila['op_mensaje4'];?></textarea>
				</div>



				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Actualizar
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>

    </div>
  </div>

  
</div>

<script>
$(document).on('ready', function() {
    $("#input-b6").fileinput({
        showUpload: false,
        dropZoneEnabled: false,
        maxFileCount: 10,
        mainClass: "input-group-lg"
    });
});
</script>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>
<?php
}
?>
</html>
 
