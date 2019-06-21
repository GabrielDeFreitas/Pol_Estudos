<?php

if(isset($_POST['Acao'])){ $Acao=filter_input(INPUT_POST,'Acao',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Acao'])){ $Acao=filter_input(INPUT_GET,'Acao',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Acao=""; }

if(isset($_POST['Id'])){ $Id=filter_input(INPUT_POST,'Id',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Id'])){ $Id=filter_input(INPUT_GET,'Id',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Id=0; }

if(isset($_POST['Nome'])){ $Nome=filter_input(INPUT_POST,'Nome',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Nome'])){ $Nome=filter_input(INPUT_GET,'Nome',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Nome=""; }

if(isset($_POST['Quantidade'])){ $Quantidade=filter_input(INPUT_POST,'Quantidade',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Quantidade'])){ $Quantidade=filter_input(INPUT_GET,'Quantidade',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Quantidade=""; }

if(isset($_POST['Categoria'])){ $Categoria=filter_input(INPUT_POST,'Categoria',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Categoria'])){ $Categoria=filter_input(INPUT_GET,'Categoria',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Categoria=""; }

if(isset($_POST['Conta'])){ $Conta=filter_input(INPUT_POST,'Conta',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Conta'])){ $Conta=filter_input(INPUT_GET,'Conta',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Conta=""; }

if(isset($_POST['Data'])){ $Data=filter_input(INPUT_POST,'Data',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Data'])){ $Data=filter_input(INPUT_GET,'Data',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Data=""; }

if(isset($_POST['Descricao'])){ $Descricao=filter_input(INPUT_POST,'Descricao',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Descricao'])){ $Descricao=filter_input(INPUT_GET,'Descricao',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Descricao=""; }

if(isset($_POST['Tipo'])){ $Tipo=filter_input(INPUT_POST,'Tipo',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Tipo'])){ $Tipo=filter_input(INPUT_GET,'Tipo',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Tipo=""; }


?>
