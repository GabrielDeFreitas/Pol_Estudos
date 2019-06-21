<h1>H1 separado de geral</h1>
<?php
  echo "echo";
  echo "<h1> ECHO</h1>";
?>
<!--Comentarios :D-->
<section>
	<h2>cabeça de gelo</h2>
	<p>Angular é um dos frameworks para a criação de interfaces de usuário mais exigidos pelo mercado de trabalho.</p>
	  bla bla quebra de linha<br>
	  bla bla quebra de linha 2<br>
	<p>sem quebra de linnha (p)</p>
	<dl>
		<dt>XAMPP</dt>
		<dd>O <b>XAMPP</b>, que traz em um único pacote o Apache, o <u>PHP</u> e o banco de dados <a href="https://pt.wikipedia.org/wiki/MySQL">MySQL</a></dd>
		<dd>O objetivo do <a href="https://www.apachefriends.org/pt_br/index.html" target="_blank">"XAMPP"</a>é construir uma distribuição fácil de <i>instalar</i> para os programadores.</dd>
	</dl>

	<form action="http://arquivo.devmedia.com.br/projeto/requisicao.php" method="post">
		<fieldset>
			<legend>Dados aleatorios pra testa ò___ó </legend>
			<div>
				<label>email:</label>
	            <input type="email" name="email" maxlength="70"/>
			</div>
			<div>
				<label>senha:</label>
	            <input type="password" name="senha" maxlength="6"/>
			</div>
			<div>
				<label>confirma senha:</label>
	            <input type="password" name="confirma_senha" maxlength="6"/>
			</div>
			<div>
				<label>nome completo:</label>
	            <input type="text" name="nome" maxlength="38" size="30" />
			</div>
			<div>
				<label>Rg:</label>
				<input type="text" name="rg" size="13" maxlength="13">
			</div>
			<div>
				<label>CPF:</label>
				<input type="text" name="cpf" size="9" maxlength="9"> - 
				<input type="text" name="cpf" size="2" maxlength="2">
			</div>
			<div>
			    <label>numero para contato:</label>
	            <input type="number" name="numero_contato" minlength="1" placeholder="(99)9999-9999"/>
			</div>
			<div>
			    <label>data de nascimetno:</label>
	            <input type="date" name="data" />
			</div>
			<div>
				<label>data de nascimento v2</label>
				<input type="text" name="dia" value="dd" size="2">
				<input type="text" name="mes" value="mm" size="2">
				<input type="text" name="ano" value="aaaa" size="4">
			</div>
			<div>
				<label>sexo:</label>
				<label>masculino</label>
				<input type="radio" name="sexo" value="masculino" checked/>
				<label>feminino</label>
				<input type="radio" name="sexo" value="feminino"/>
				<label>outros</label>
				<input type="radio" name="sexo" value="outros"/>
			</div>
			<div>
				<label>foto de perfil:</label>
				<input type="file" name="foto_perfil" accept="image/*">
			</div>
		</fieldset>
		<fieldset>
			<legend>Mais dado aleatorio</legend>
			<div>
				<label>rua:</label>
			    <input type="text" name="rua" maxlength="12">
			</div>
			<div>
				<label>numero:</label>
			    <input type="number" name="numero_casa" minlength="1" maxlength="9999">
			</div>
			<div>
				<label>complemento:</label>
			    <input type="text" name="complemento" >
			</div>
			<div>
				<label>cidade</label>
			    <input type="text" name="cidade">
			</div>
			<div>
				<label>estado</label>
			    <select>
			    	<option value="SC">Santa Catarina</option>
			    	<option value="RJ">Rio de Janeiro</option>
			    	<option value="SP">São Paulo</option>
			    </select>
			</div>
			<label>caixa de comentario *---*</label>
			<div>
				<textarea style="resize: horizontal 20;" style="resize: vertical 30;" name="comentario" placeholder="free fire"></textarea>
			</div>
			<div>
				<input type="checkbox" name="notificacao">
				<label>Deseja receber notificações do zapzapzapzap</label>
			</div>
		</fieldset>

		<fieldset>

			<legend>Inputs novos</legend>
			<div>
				<label>Calendario week:</label>
				<input type="week" name="semana">
			</div>
			<div>
				<label>Range1:</label>
				<input type="range" name="status_hp">
			</div>
			<div>
				<label>Range2</label>
				<input type="range" name="status_mp">
			</div>
			<div>
				
			</div>

		</fieldset>

		<input type="submit" name="cadastro" value="enviar">
		<input type="reset" value="limpar">
	</form>
	<table border="1">
		<tr>
			<th>A</th>       
			<th>A</th>
			<th>A</th>
		</tr>
		<tr>
			<th>D</th>
			<th>D</th>
			<th>D</th>
		</tr>
		<tr>
			<th>E</th>
			<th>E</th>
			<th>E</th>
		</tr>
		<tr>
			<th>Y</th>
			<th>Y</th>
			<th>Y</th>
		</tr>
	</table>
</section>