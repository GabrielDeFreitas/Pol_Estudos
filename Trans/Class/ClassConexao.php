<?php 

 class ClassConexao {
	
	protected function conectaDB()
	{
		try{
			$Con=new PDO("mysql:host=localhost;dbname=transacao","root","");
			
            return $Con;
			
		}catch(PDOException $Erro){
			return $Erro -> getMessage();	
		}

	}		
}
?>