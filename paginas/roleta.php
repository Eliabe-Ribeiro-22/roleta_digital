<?php
		if(isset($_POST["roleta"])){
			$aluguel = rand(0,300);
			echo "<h2>O valor do Aluguel é: " . $aluguel . "</h2>";
			echo "retornando a página inicial em 3 segundos";
			header("refresh: 3; ./../index.php");
		}
?> 
