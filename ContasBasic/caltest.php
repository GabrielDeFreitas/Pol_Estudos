<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">>
	<title>calculos teste</title>
</head>
<body>
	<head>
		<h3>Contas test:</h3>
	</head>
	<?php
	$var = "resultado:";

	$n1 =5;
	$n2 =5;
	$n3 =6;
	$n4 =7;
	$n5 =8;
	$n6 =6;
	$n7 =3;
	$n8 =4;

	$total;

    print "$n1 + $n2 + $n5 = ";
	$total = $n1 + $n2 + $n5;
    echo "$total";
	echo "</br>";
	
    print "$n1 - $n2 = ";
	$total = $n1 - $n2;
	echo "$total";
	echo "</br>";

	print "$n1 * $n2 * $n7 = ";
	$total = $n1 * $n2 *$n7;
	echo "$total";
	echo "</br>";

	print "$n1 - $n2 = ";
	$total = $n1 - $n2;
    echo "$total";
	echo "</br>";

	print "($n3+$n4+$n5)/3 = ";
	$total = ($n3+$n4+$n5)/3;
	echo "$total";
	echo "</br>";
	?>

	<section>
		<p>Estrutura de repetição 'for'</p>
		<?php
		for ($i=1; $i<11; $i++) { 
			echo $i*$i;
			echo "</br>";
		}
		?>
	</section>

	<section>
		<p>verifica se é par ou impar</p>
		<?php
		$x =5;

		print "$x: ";
		if($x % 2 ==0)
		{
			echo"par";
		}
		else
		{
			echo "impar";
		}
		?>
	</section>

	<section>
		<p>Array,armazenar mais do que um valor</p>
		<?php

		$matricula=2;
		$salario=50.00;
		$nome='Antedeguemon';
		$ativo=true;

		$funcionario = array(
			'matricula' =>2 , 
			'salario'   =>50.00 , 
			'nome'      =>'Antedeguemon' , 
			'ativo'     =>true );

		echo $funcionario['nome' ];
		?>
	</section>

	<section>
		<p>soma array</p>
		<?php 
		 print"2+4+6+8:";
		 echo "<br>";
		$a = array(2, 4, 6, 8);
         echo "soma = ".array_sum($a)."\n";
		?>
	</section>

	<section>
		<form method="POST">
		<fieldset>
			<legend>soma array v2</legend>
		    <label>numero1</label>
		    <input type="text" name="nu1" maxlength="5" size="4">
		    <label>numero2</label>
		    <input type="text" name="nu2" maxlength="5" size="4">
		    <label>numero3</label>
		    <input type="text" name="nu3" maxlength="5" size="4">
		    <label>numero4</label>
		    <input type="text" name="nu4" maxlength="5" size="4">
		    <input type="submit" name="soma">

		    <?php 
		    if (isset($_POST['soma'])) {
		    	$total=array($_POST['nu1'], $_POST['nu2'], $_POST['nu3'], $_POST['nu4']);
		    	echo "soma = ".array_sum($total)."\n";	
		    }
		    ?>
		    </fieldset>
	    </form>
	</section>

	<section>
		<p>media com array sum e count</p>
		<?php
        // VALORES
        $valores = array(6,7,8);
        // array_sum SOMA OS VALORES ACIMA
        // count CONTA OS ELEMENTOS DO ARRAY
        echo array_sum($valores)/count($valores); 
        ?>
	</section>

	<section>
		<form method="POST">
			<fieldset>
			<legend>media em array v2</legend>
			<label>nota1:</label>
			<input type="text" name="n1" required size="5" maxlength="6">
			<label>nota2:</label>
			<input type="text" name="n2" required size="5" maxlength="6">
			<label>nota3:</label>
			<input type="text" name="n3" required size="5" maxlength="6">
			<input type="submit" name="media">
			<?php
			if (isset($_POST['media'])) {
				$nota=array($_POST['n1'],$_POST['n2'],$_POST['n3'] );
				echo "media = ".array_sum($nota)/count($nota);
			}
			?>
		</fieldset>
		</form>
	</section>

	<section>
		<fieldset>
			<legend>par impar v2</legend>
		<?php
        if(isset($_POST["num"])){
        echo $_POST["num"];
        echo "<br>";
        $num = $_POST["num"];
        if($num % 2 == 0){
            echo "O número informado é par";
        }else{
            echo "O número informado é impar";
        }
     } 
        ?>
    <form method="POST">
        <input type="text" name="num"/ size="5">
        <input type="submit">
    </form>
		</fieldset>
	</section>

	<section>
		<form method="POST">
			<fieldset>
				<legend>ordenar array</legend>
				<label>idade1:</label>
	            <input type="number" name="id1" required size="5" maxlength="6" value="id1">
			    <label>idade2:</label>
			    <input type="number" name="id2" required size="5" maxlength="6" value="id2">
			    <label>idade3:</label>
			    <input type="number" name="id3" required size="5" maxlength="6" value="id3">
			    <input type="submit" name="idade">
			    <?php
			    if (isset($_POST['idade'])) {
			    	$maior=array($_POST['id1'],$_POST['id2'],$_POST['id3'] );
			    	sort($maior);
				
			    }

			    ?>
			</fieldset>
		</form>
	</section>
</body>
</html>