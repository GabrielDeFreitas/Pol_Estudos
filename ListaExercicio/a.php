<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Respotas A</title>
</head>
<body>
	<header>
		<h3>Lista A</h3>
		<ul>
			<li><a href="main.php">Página Principal</a></li>
			<br><li><a href="b.php">Respostas Lista B</a></li>
			<li><a href="c.php">Respostas Lista C</a></li>
			<li><a href="d1.php">Respostas Lista D</a></li>
		</ul>
		<section>
			<fieldset>
				<legend>Exercício 01</legend>
				<form method="POST">
					numero 1:
					<input type="text" name="n1" size="6"><br>
					numero 2:
					<input type="text" name="n2" size="6"><br>
					numero 3:
					<input type="text" name="n3" size="6"><br>
					numero 4:
					<input type="text" name="n4" size="6"><br>
					numero 5:
					<input type="text" name="n5" size="6">
					<input type="submit" name="calcular">

					<?php 
					if (isset($_POST)) {
						$num1=$_POST['n1'];
						$num2=$_POST['n2'];
						$num3=$_POST['n3'];
						$num4=$_POST['n4'];
						$num5=$_POST['n5'];

						echo "</br>";
					    echo $num1*$num1;
					    echo "</br>";
					    echo $num2*$num2;
					    echo "</br>";
					    echo $num3*$num3;
					    echo "</br>";
					    echo $num4*$num4;
					    echo "</br>";
					    echo $num5*$num5;
					}
					 ?>
					 
					
				</form>
			</fieldset>
		</section>

		<section>
			<fieldset>
				<legend>Exercício 02</legend>
				<form method="POST" action="">
				<p>Primeiro numero:
				  <input type="text" name="valor1" size="8" maxlength="10">
				</p>
				<p>Segundo numero:
				  <input type="text" name="valor2" size="8" maxlength="10">
			    </p>
				<p>
					<input type="radio" name="operacao" value="adi"/>Adição</br>
					<input type="radio" name="operacao" value="sub"/>Subtração</br>
					<input type="radio" name="operacao" value="div"/>Divisão</br>
					<input type="radio" name="operacao" value="mult"/>Multiplicação</br>
				</p>
				<input type="submit" name="calcular">
				<?php
				$val1 = isset($_POST['valor1']) ? $_POST['valor1']: null;
                $val2 = isset($_POST['valor2']) ? $_POST['valor2']: null;

                $operacao = isset($_POST['operacao']) ? $_POST['operacao']: null;
               switch ($operacao) {
	           case 'adi':
		       echo $val1 + $val2;
		       break;

	           case 'sub':
		       echo $val1 - $val2;
		       break;

	           case 'div':
	           echo $val2 / $val2;
	           break;

	           case 'mult':
		       echo $val1 * $val2;
		       break;
	
	           default:
		       echo 'Escolha uma operação!';
		       break; 
		   }
				?>
				</form>
			</fieldset>
		</section>

		<section>
			<fieldset>
				<legend>Exercício03</legend>
				<label>Estado</label>
				<form method="POST">
				<select>
				    <option value="AC">Acre</option>
	                <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
	                <option value="AM">Amazonas</option>
	                <option value="BA">Bahia</option>
				</select>
				<input type="submit" name="estado">

			</fieldset>
		</section>

		<section>
			<fieldset>
				<legend>Exercício04</legend>
				<form method="POST">
    	<p>Digite um numero:</p>
        <input type="text" name="num"/ size="5">
        <input type="submit">
    </form>
			<?php
        if(isset($_POST["num"])){
        echo $_POST["num"];
        echo "<br>";
        $num = $_POST["num"];
        if($num % 2 == 0){
            echo "O número informado é : <b>par</b>";
        }else{
            echo "O número informado é : <b>impar</b>";
        }
     } 
        ?>
			</fieldset>
		</section>

		<section>
			<fieldset>
				<legend>Exercício05</legend>
				<form method="POST" action=""></form>
				<p>Exiba o salário atual desse funcionário.</br>
				  <input type="submit" name="" value="salario">
				</p>
			</fieldset>
		</section>

	</header>
	<section>
		<h4>Cabeça de bombona d'agua <br><a href="https://www.youtube.com/watch?v=swc0TcJynkA" target="_blank"> <i>Debiru_mei_crai</i></a></h4>
	</section>
	<footer>
		<p> <b>&copy:top10 rodapés brabos do zapzap 2019 todos os direitos resevados</b> </p>
	</footer>
</body>
</html>