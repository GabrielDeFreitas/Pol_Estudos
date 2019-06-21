<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Respota D</title>
</head>
<body>
	<header>
		<h3>Lista D</h3>
		<ul>
			<li><a href="main.php">Página Principal</a></li>
			<br><li><a href="a.php">Respostas Lista A</a></li>
			<li><a href="b.php">Respostas Lista B</a></li>
			<li><a href="c.php">Respostas Lista C</a></li>
		</ul>
	</header>


	<section>
		<form method="POST">
			<fieldset>
				<legend>Exercicio01</legend>
				<p>Crie um programa que exiba quantos caracteres possui o a palavra digitada pelo usuário.</p>
				<label>Palavra 1:</label>
				<input type="text" name="p">
				<input type="submit" name="confirma">

				<?php		 	
				if (isset($_POST['confirma'])) {
					$palavrax = $_POST['p'];
					echo "</br>";
					print_r (explode("p",$palavrax)); 

					$arr1 = str_split($palavrax);
					echo "</br>";
					print_r($arr1);
				} 
				?>
			</fieldset>
		</form>
	</section>

	<section>
		<form method="POST">
			<fieldset>
				<legend>Exercicio 2</legend>
				<p>Crie um programa em que em uma palavra digitada pelo usuário sejam substituídas todas as vogais por ?</p>
				<label>Palavra1:</label>
				<input type="text" name="p1">
				<label>Palavra2:</label>
				<input type="text" name="p2">
				<input type="submit" name="conf">

				<?php 
				if (isset($_POST['conf'])) {
					$palavrax= $_POST['p1'];
					$palavray = $_POST['p2'];
					$vogais=str_replace("a","?",$palavrax );
					$vogais2=str_replace("a", "?",$palavray);

					echo "</br>";
					echo $vogais;
					echo "</br>";
					echo $vogais2;

				} 
				 ?>
			</fieldset>
		</form>
	</section>

	<section>
		<form method="POST">
			<fieldset>
				<legend>Exercicio 3</legend>
				<p>Crie um programa em que usuário digite seu CEP. Capture apenas os 3 últimos números e exiba-o.</p>
				<label>CEP do usuário:</label>
				<input type="text" name="cep" maxlength="9"size="8"/>
				<input type="submit" name="co">

				<?php
				if (isset($_POST['co'])){
					$cep1=$_POST['cep'];
					echo substr($cep1, -3);
					
				}
				?>
			</fieldset>
		</form>
	</section>

	<section>
		<form method="POST">
			<fieldset>
				<legend>Exercicio 4</legend>
				<p>Exiba separadamente o dia, mês e ano de uma data completa fornecida pelo usuário.</p>
				<input type="text" name="dia"  size="2"maxlength="2">
				<input type="text" name="mes"  size="2"maxlength="2">
				<input type="text" name="ano"  size="4"maxlength="4">
				<input type="submit" name="dat"/>

				<?php 
				if (isset($_POST['dat'])) {
					$dd=$_POST['dia'];
					$mm=$_POST['mes'];
					$aaaa=$_POST['ano'];		

					echo "</br>";
					echo "dia:".$dd;
					echo "</br>";
					echo "mes:".$mm;
					echo "</br>";
					echo "ano:".$aaaa;	
				}

				 ?>
			</fieldset>
		</form>
	</section>

	<section>
		<form method="POST">
			<fieldset>
				<legend>Exercicio 5</legend>
				<p>Exiba a palavra digitada pelo usuário de maneira inversa.</p>
				<label>Palavra1:</label>
				<input type="text" name="pa1" size="6" maxlength="9">
				<label>Palavra2:</label>
				<input type="text" name="pa2" size="6" maxlength="9">
				<input type="submit" name="confir">

				<?php 
				if (isset($_POST['confir'])) {
					$palavra1 = $_POST['pa1'];
					$palavra2 = $_POST['pa2'];

					echo "</br>";
					echo strrev($palavra1);
					echo "</br>";
					echo strrev($palavra2);
				}
				?>
			</fieldset>
		</form>
	</section>

	<section>
		<form method="POST">
			<fieldset>
				<legend>Exercicio 6</legend>
				<p>Transforme o seguinte link <b>(rb.moc.cete.www)</b> que está invertido de maneira inversa, inclusive transformando em um link funcional.</p>
				<p>rb.moc.cete.www</p>
				<label>site:</label>
				<input type="search" name="lin" >
				<input type="submit" name="link">

				<?php 
				if (isset($_POST['link'])) {
					$site = $_POST['lin'];

					echo "</br>";
					echo strrev($site); 
					
				}
				 ?>

			</fieldset>
		</form>
	</section>

		<section>
		<h4>Cabeça de bombona d'agua <br><a href="https://www.youtube.com/watch?v=swc0TcJynkA" target="_blank"> <i>Debiru_mei_crai</i></a></h4>
	</section>
	<footer>
		<p> <b>&copy:top10 rodapés brabos do zapzap 2019 todos os direitos resevados</b> </p>
	</footer>

</body>
</html>