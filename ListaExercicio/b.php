<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Respostas B</title>
</head>
<body>
	<header>
		<h3>Lista B</h3>
		<ul>
			<li><a href="main.php">Página Principal</a></li>
			<br><li><a href="a.php">Respostas Lista A</a></li>
		    <li><a href="c.php">Respostas Lista C</a></li>
			<li><a href="d1.php">Respostas Lista D</a></li>
		</ul>
	</header>

	<section>
		<fieldset>
			<legend>Exercício 01</legend>
			<form method="post">
				<p>Digite os numeros e calcule a média:</p>
				numero 1:
				<input type="text" name="n1" size="6" maxlength="5">
				numero 2:
				<input type="text" name="n2" size="6" maxlength="5"></br>
				numero 3:
				<input type="text" name="n3" size="6" maxlength="5">
				numero 4:
				<input type="text" name=n4 size="6" maxlength="5"></br>
				numero 5:
				<input type="text" name="n5" size="6" maxlength="5">
				numero 6:
				<input type="text" name="n6" size="6" maxlength="5"></br>
				numero 7:
				<input type="text" name="n7" size="6" maxlength="5">
				numero 8:
				<input type="text" name="n8" size="6" maxlength="5"></br>
				numero 9:
				<input type="text" name="n9" size="6" maxlength="5">
				numero 10:
				<input type="text" name="n10" size="5" maxlength="5"></br>
				<input type="submit" name="media" value="calcular">

				<?php 
				if (isset($_POST['media'])) {
					$media= array($_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['n4'], $_POST['n5'], $_POST['n6'], $_POST['n7'],
						$_POST['n8'], $_POST['n9'], $_POST['n10'],);
					echo "media = ".array_sum($media)/count($media);
				}
				 ?>
			</form>
		</fieldset>
	</section>

	<section>
		<fieldset>
		<legend>Exercicio02</legend>
		<form method="post">
			<p>Digite 5 numeros e indique o maior e menor numero:</p>
			numero 1:
			<input type="text" name="n1">
			numero 2:
			<input type="text" name="n2"></br>
			numero 3:
			<input type="text" name="n3">
			numero 4:
			<input type="text" name=n4></br>
			numero 5:
			<input type="text" name="n5"><br>
			<input type="submit" name="maior_menor" value="calcular">
			<?php
			if (isset($_POST['maior_menor'])) {
				$valores= array($_POST['n1'],$_POST['n2'],$_POST['n3'],$_POST['n4'],$_POST['n5']);
			echo "</br>";
			echo "Maior numero = ";
			echo max($valores);
			echo "</br>";
			echo "Menor numero = ";
			echo min($valores);
		
			}
			?>
			</form>
		</fieldset>
	</section>

	<section>
        <fieldset>
		<legend>Exercicio03</legend>
		<form method="post" action="">
		<p>Exiba quantas pessoas possuem mais de 18 anos e quantas menos:</p>
		Bruno:
		<input type="text" name="i1" size="2" maxlength="2">
		Bruna:
		<input type="text" name="i2" size="2" maxlength="2">
		Brendu:
		<input type="text" name="i3" size="2" maxlength="2">
		Brenda:
		<input type="text" name="i4" size="2" maxlength="2">
		<input type="submit" name="dado" value="verificar">
		<?php
			if (isset($_POST['dado'])) {
				$idades = array($_POST['i1'],$_POST['i2'],$_POST['i3'],$_POST['i4'],);
				echo "</br>";
			    print_r($idades);
			 	
			 } 
		 ?>
		</form>
		
		</fieldset>	
	</section>

	<section>
		<fieldset>
		<legend>Exercício04</legend>
		<form method="post">
		<p>Informe,quantas pessoas são do sexo Masculino e quantas são do sexo feminino:</p>
			<label>PessoaX:</label> 
		 	</br>
			<label>Masculino</label>
			<input type="checkbox" name="sexo" value="masculino">
			<label>Feminino</label>
			<input type="checkbox" name="sexo" value="masculino">
			<label>Outros</label>
			<input type="checkbox" name="sexo" value="masculino"checked>
			</br>
			<label>PessoaY:</label>
			</br>
			<label>Masculino</label>
			<input type="checkbox" name="sexo" value="masculino">
			<label>Feminino</label>
			<input type="checkbox" name="sexo" value="masculino">
			<label>Outros</label>
			<input type="checkbox" name="sexo" value="masculino"checked>
			</br>
			<label>PessoaZ:</label>
			</br>
			<label>Masculino</label>
			<input type="checkbox" name="sexo" value="masculino">
			<label>Feminino</label>
			<input type="checkbox" name="sexo" value="masculino">
			<label>Outros</label>
			<input type="checkbox" name="sexo" value="masculino"checked>
			</br>
			<label>PessoaW:</label>
			</br>
			<label>Masculino</label>
			<input type="checkbox" name="sexo" value="masculino">
			<label>Feminino</label>
			<input type="checkbox" name="sexo" value="masculino">
			<label>Outros</label>
			<input type="checkbox" name="sexo" value="masculino"checked>
		</form>
	</fieldset>
	</section>

	<section>
		<fieldset>
		<legend>Exercício05</legend>
		<form method="post">
		<p>Exiba na tela todos os nomes digitados, porém de maneira invertida:</p>
		<label>Nome 0:</label>
		<input type="text" name="nome1">
		<label>Nome 1:</label>
		<input type="text" name="nome2"></br>
		<label>Nome 2:</label>
		<input type="text" name="nome3">
		<label>Nome 3:</label>
		<input type="text" name="nome4"></br>
		<input type="submit" name="conf" value="jojo"> </br>
		
		<?php 
		if(isset($_POST['conf'])){
			$no1 = $_POST['nome1'];
			$no2 = $_POST['nome2'];
			$no3 = $_POST['nome3'];
			$no4 = $_POST['nome4'];

			echo " Nome 0:";
			echo strrev($no1);
			echo " Nome 1:";
			echo strrev($no2);
			echo " Nome 2:";
			echo strrev($no3);
			echo " Nome 4:";
			echo strrev($no4);
			
		}
		?>

		</form>
	</fieldset>
	</section>

	<section>
		<fieldset>
		<legend>Exercício06</legend>
		<form method="POST">
		<p>Faça a soma de todos os valores contidos nos blocos pares do Array:</p>
		<label>Numero1:</label>
		<input type="text" name="ni1">
		<label>Numero2:</label>
		<input type="text" name="ni2">
		<label>Numero3:</label>
		<input type="text" name="ni3">
		<label>Numero4:</label>
		<input type="text" name="ni4">
		<input type="submit" name="lol">

		<?php 
			if (isset($_POST['lol'])) {
			$soma= array(
		    $_POST['ni1'], $_POST['ni2'], 
			$_POST['ni3'], $_POST['ni4'],);

			if ($num % 2 == 0) {
				echo "soma dos pares = ".array_sum($soma);
			}
		}
		 ?>

		</form>
	</fieldset>
	</section>

	<section>
		<fieldset>
		<legend>Exercício07</legend>
		<form method="POST">
		<p>Faça a soma de todos os valores contidos nos blocos pares e nos ímpares do Array.
           Por fim, exiba qual o total de soma maior, o dos pares ou ímpares:</p>
           <label>numero1</label>
           <input type="text" name="nun1">
           <label>numero2</label>
           <input type="text" name="nun2">
           <label>numero3</label>
           <input type="text" name="nun3">
           <label>numero4</label>
           <input type="text" name="nun4">
           <input type="submit" name="zip" value="Calcular">
		</form>
	</fieldset>
	</section>

	<section>
		<fieldset>
			<legend>Exercício08</legend>
			<form method="POST">
				<p>Exiba separadamente o dia, o mês e o ano.</p>
				<input type="date" name="data" >
				<input type="submit" name="dma2">
				<?php  
				
				?>
			</form>
		</fieldset>
	</section>
	<section>
		<h4>Cabeça de bombona d'agua <br><a href="https://www.youtube.com/watch?v=swc0TcJynkA" target="_blank"> <i>Debiru_mei_crai</i></a></h4>
	</section>
	<footer>
		<p> <b>&copy:top10 rodapés brabos do zapzap 2019 todos os direitos resevados</b> </p>
	</footer>

</body>
</html>