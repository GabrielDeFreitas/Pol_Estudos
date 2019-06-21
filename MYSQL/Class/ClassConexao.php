<?php 

 class ClassConexao {
	#realiaza a conexao com o db
	protected function conectaDB()
	{
		try{
			$Con=new mysqli("localhost","root","","crud");
            return $Con;

		}catch(Exception $Erro){
			return $Erro->getMessage();
		}

	}
		
}

?>
