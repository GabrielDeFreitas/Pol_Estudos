<?php
include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");

$Crud=new ClassCrud();
$Crud->insertDB(
    "cadastro",
    "?,?,?,?",
    "isss",
    array(
        $Id,
        $Nome,
        $Sexo,
        $Cidade
    )
);

echo "Cadastro Realizado com Sucesso!";
