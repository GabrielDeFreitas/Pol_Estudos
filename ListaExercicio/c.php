<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Respota C</title>
</head>
<body>
	<header>
		<h3>Lista B</h3>
		<ul>
			<li><a href="main.php">Página Principal</a></li>
			<br><li><a href="a.php">Respostas Lista A</a></li>
			<li><a href="b.php">Respostas Lista B</a></li>
			<li><a href="d1.php">Respostas Lista D</a></li>
		</ul>
	</header>

	<section>
		<form method="POST">
			<fieldset>
				<legend>Exercicio01</legend>
				<p>Digite diversos nomes e guarde-os em um array <b>(use o explode)</b>. Em seguida, exiba quantas letras possuem cada nome armazenado no array.</p>
				<label><b>Nome 1:</b></label>
				<input type="text" name="n1" size="6">
				<label><b>Nome 2:</b></label>
				<input type="text" name="n2" size="6">
				<label><b>Nome 3:</b></label>
				<input type="text" name="n3" size="6">
				<label><b>Nome 4:</b></label>
				<input type="text" name="n4" size="6">
				<input type="submit" name="confirmar">

				<?php

				if (isset($_POST['confirmar'])) {
					$pes1 = $_POST['n1'];
					$pes2 = $_POST['n2'];
					$pes3 = $_POST['n3'];
					$pes4 = $_POST['n4'];
					#$palavrax = $_POST['p'];
					#print_r (explode(" ",$pessoa));

					$arr1 = str_split($pes1);
					echo "</br>";
					print_r($arr1);
					$arr2 = str_split($pes2);
					echo "</br>";
					print_r($arr2);
					$arr3 = str_split($pes3);
					echo "</br>";
					print_r($arr3);
					$arr4 = str_split($pes4);
					echo "</br>";
					print_r($arr4);

				 } 
				?>
			</fieldset>
		</form>
	</section>

	<section>
		<form method="POST">
			<fieldset>
				<legend>Exercicio02</legend>
				<p>Digite diversas palavras e guarde-as em um array. 
				Em seguida, substitua todas as letras A de cada palavra por #.</p>
				<label><b>Palavra 1:</b></label>
				<input type="text" name="p1" size="6">
				<label><b>Palavra 2:</b></label>
				<input type="text" name="p2" size="6">
				<label><b>Palavra 3:</b></label>
				<input type="text" name="p3" size="6">
				<label><b>Palavra 4:</b></label>
				<input type="text" name="p4" size="6">
				<input type="submit" name="confirmar2">

				<?php
				if (isset($_POST['confirmar2'])) {
					$pe1 = $_POST['p1'];
					$pe2 = $_POST['p2'];
					$pe3 = $_POST['p3'];
					$pe4 = $_POST['p4'];
					$vo1=str_replace("a","#",$pe1 );
					$vo2=str_replace("a","#",$pe2 );
					$vo3=str_replace("a","#",$pe3 );
					$vo4=str_replace("a","#",$pe4);

					echo " nome1:".$vo1;
					echo " nome2:".$vo2;
					echo " nome3:".$vo3;
					echo " nome4:".$vo4;
				 	
				 } 
				?>
			</fieldset>
		</form>
	</section>

<section>
		<form method="POST">
			<fieldset>
				<legend>Exercicio03</legend>
				<p>Crie 2 caixas de texto. Na primeira, digite 4 números, e na segundo 1 número apenas. Guarde os 4 números em 1 array.
                 O outro número digitado, deverá assumir a primeira posição (bloco 0) e deslocar os outros valores para os blocos seguintes.</p>
                 <label><b>Digite 4 números:</b></label>
                 <input type="text" name="num4" maxlength="4" size="2">
                 <label><b>Digite 1 número:</b></label>
                 <input type="text" name="num1" maxlength="1" size="2">
                 <input type="submit" name="botao">

                 <?php
                 if (isset($_POST['botao'])) {
                 	$numi4 = $_POST['num4'];
                    $numi1 = $_POST['num1'];

                    echo "</br>";
                    echo $numi4;
                    echo "</br>";
                    echo $numi1;

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