<?php 
include("Includes/Header.php");
include("Class/ClassCrud.php");
?>
	<div class="Content">
    <?php
        $Crud=new ClassCrud();
        $IdUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);

        $BFetch=$Crud->selectDB(
            "*",
            "financeiro",
            "where Id=?",
            array($IdUser)
        );
        $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
    ?>
    <h1>Dados da Transação</h1>
    <hr>
    <strong>Id:</strong> <?php echo $Fetch['id']; ?><br>
    <strong>Data:</strong> <?php echo $Fetch['data']; ?><br>
    <strong>Tipo:</strong> <?php echo $Fetch['tipo']; ?><br>
    <strong>Nome:</strong> <?php echo $Fetch['nome']; ?><br>
    <strong>Categoria:</strong> <?php echo $Fetch['categoria']; ?><br>
    <strong>Quantidade:</strong> <?php echo $Fetch['quantidade']; ?><br>
    <strong>Conta:</strong> <?php echo $Fetch['conta']; ?><br>
    <strong>Descrição:</strong> <?php echo $Fetch['descricao']; ?><br>
	</div>

<?php include("Includes/Footer.php"); ?>
