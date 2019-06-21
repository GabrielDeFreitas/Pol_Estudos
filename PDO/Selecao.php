<?php

 include("Includes/Header.php");
 include("Class/ClassCrud.php");
 ?>

	<div class = "Content">
		<table class="TabelaCrud">
     <tr>
         <td>Nome</td>
         <td>Sexo</td>
         <td>Cidade</td>
         <td>Estado</td>
         <td>Email</td>
         <td>Ações</td>
     </tr>
     
     <!-- Estrutura de loop-->
     <?php
     $Crud=new ClassCrud();
     $BFetch= $Crud-> selectDB(
         "*",
         "cadastro",
         "",
         array()
     );

    #-----
    print_r($_GET); 
    #-----

    while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
  ?>

     <tr>
         <td><?php echo $Fetch['nome']; ?></td>
         <td><?php echo $Fetch['sexo']; ?></td>
         <td><?php echo $Fetch['cidade']; ?></td>
         <td><?php echo $Fetch['estado']; ?></td>
         <td><?php echo $Fetch['email']; ?></td>

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
