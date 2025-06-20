<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Roleta Digital</title>
</head>
<body>
	<script type="text/javascript">
		function teste(){
			alert("Quanto será que vai ser o aluguel? Aguarde um momento")
		}
	</script>
	<main>
		<form action="./roleta.php" method="POST" onsubmit="return teste()">
			<img src="./roleta.img" alt="Imagem de Roleta">
			<button name="roleta">Girar Roleta</button>
		</form>
		
	</main>
</body>
</html>
