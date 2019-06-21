<?php 

 class ClassConexao {
	#realiaza a conexao com o db
	public function conectaDB()
	{
		try{
			$Con=new PDO("mysql:host=localhost;dbname=crud","root","");
			return $Con;

		}catch(PDOException $Erro){
			return $Erro -> getMessage();

		}

	}
		
}

?>