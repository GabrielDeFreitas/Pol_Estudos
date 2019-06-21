<?php

 include("Includes/Header.php");
 include("Class/ClassCrud.php");
 ?>

	<div class = "Content">
		<table class="TabelaCrud">
     <tr>
         <td>Data</td>
         <td>Tipo</td>
         <td>Nome</td>
         <td>Categoria</td>
         <td>Quantidade</td>
         <td>Conta</td>
         <td>Descrição</td>
         <td>Ações</td>
     </tr>

     <!-- Estrutura de loop-->
     <?php
     $Crud=new ClassCrud();
     $BFetch= $Crud-> selectDB(
         "*",
         "financeiro",
         "",
         array()
     );

    #-----
    print_r($_GET);


    #-----

    while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
  ?>

     <tr>
         <td><?php echo $Fetch['data']; ?></td>
         <td><?php echo $Fetch['tipo']; ?></td>
         <td><?php echo $Fetch['nome']; ?></td>
         <td><?php echo $Fetch['categoria']; ?></td>
         <td><?php echo $Fetch['quantidade']; ?></td>
         <td><?php echo $Fetch['conta']; ?></td>
         <td><?php echo $Fetch['descricao']; ?></td>

         <td>
         	<a href="<?php echo "Visualizar.php?id={$Fetch['id']}"; ?>";><h5>Visualizar</h5></a>
         	<a href="<?php echo "Cadastro.php?id={$Fetch['id']}"; ?>";><h5>Editar</h5></a>
            <a href="<?php echo "Controllers/ControllerDeletar.php?id={$Fetch['id']}"; ?>";><h5>Deletar</h5></a>
         </td>
     </tr>
     <?php 
      
    }
     ?>
</table>

    </div>


<?php include ("Includes/Footer.php");?>

<div >
    Pesquisar
    <input type="text" name="pesquisar">
    <input type="submit" name="consultar" value="Consultar">
</div>