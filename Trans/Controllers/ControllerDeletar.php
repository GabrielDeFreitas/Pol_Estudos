<?php 
include("../Class/ClassCrud.php");

   $Crud=new ClassCrud();
   $IdUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);

   $Crud->deleteDB(
    "financeiro",
    "id=?",
    array(
       $IdUser
    )
);

header('location: ../Selecao.php?msn=Dado <b>Deletado</b> com sucesso!');
