<?php

include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");

$Crud=new ClassCrud();

if($Acao=='Cadastrar'){
        $Crud->insertDB(
            "cadastro",
            "?,?,?,?,?,?",
            array(
                $Id,
                $Nome,
                $Sexo,
                $Email,
                $Cidade,
                $Estado
            )
        );
        header('Location: ../Cadastro.php?msg=Cadastro <b>Realizado</b> com Sucesso!'); 
}else{
        $Crud->updateDB(
            "cadastro",
            "Nome=?,Sexo=?,Cidade=?,Email=?,Estado=?",
            "Id=?",
            array(
                $Id,
                $Nome,
                $Sexo,
                $Email,
                $Cidade,
                $Estado
            )
        );
        header('Location: ../Cadastro.php?msg=Cadastro <b>Editado</b> com Sucesso!'); 
}

?>