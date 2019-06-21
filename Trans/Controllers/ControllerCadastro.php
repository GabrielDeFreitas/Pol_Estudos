<?php

include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");

$Crud=new ClassCrud();

if($Acao=='Cadastrar'){
        $Crud->insertDB(
            "financeiro",
            "?,?,?,?,?,?,?,?",
            array(    
                $Id,
                $Data,
                $Tipo,
                $Nome,
                $Categoria,
                $Quantidade,
                $Conta,  
                $Descricao

            )
        );
        header('Location: ../Cadastro.php?msg=Transação <b>Realizada</b> com Sucesso!'); 
}else{
        $Crud->updateDB(
            "financeiro",
            "Data=?,Tipo=?,Nome=?,Categoria=?,Quantidade=?,Conta=?,Descricao=?",
            "Id=?",
            array(
                $Id,
                $Data,
                $Tipo,
                $Nome,
                $Categoria,
                $Quantidade,
                $Conta,  
                $Descricao
            )
        );
        header('Location: ../Cadastro.php?msg=Transação <b>Editada</b> com Sucesso!'); 
}

?>