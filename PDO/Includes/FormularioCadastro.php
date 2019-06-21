<?php
  print_r($_GET);

    include("Class/ClassCrud.php");
    /* Edição de dados */
    if(isset($_GET['id'])){
        $Acao="Editar";

        $Crud=new ClassCrud();
        $BFetch=$Crud->selectDB("*","cadastro","where Id=?",array($_GET['id']));
        $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
        $Id=$Fetch['id'];
        $Nome=$Fetch['nome'];
        $Sexo=$Fetch['sexo'];
        $Cidade=$Fetch['cidade'];
        $Email=$Fetch['email'];
        $Estado=$Fetch['estado'];
    }

    /* Cadastro novo */
    else{
        $Acao="Cadastrar";
        $Id=0;
        $Email="";
        $Nome="";
        $Sexo="";
        $Cidade="";
        $Estado="";
        
    }
?>

<div class="Resultado"></div>

<div >  

    <form name="FormCadastro" id="FormCadastro" method="post" action="Controllers/ControllerCadastro.php">
        <input type="hidden" id="Acao" name="Acao" value="<?php echo $Acao; ?>">
        <input type="hidden" id="Id" name="Id" value="<?php echo $Id; ?>">

    <div class="FormularioInput">
        Nome: <br>
        <input  type="text" id="Nome" name="Nome" value="<?php echo $Nome; ?>">
    </div>

    <div class="FormularioInput">
        Email: <br>
        <input type="text" id="Email" name="Email" value="<?php echo $Email; ?>">
    </div>

    <div class="FormularioInput">
         Cidade: <br>
            <input type="text" id="Cidade" name="Cidade" value="<?php echo $Cidade; ?>">
    </div>

    <div class="FormularioInput">
         Estado: <br>
            <select name="Estado" id="Estado">
                <option value="<?php echo $Estado; ?>"><?php echo $Estado; ?></option>
                <option value="Santa Catarina">Santa Catarina</option>
                <option value="Rio de Janeiro">Rio de Janeiro</option>
                <option value="São Paulo">São Paulo</option>
            </select>
    </div>

    <div class="FormularioInput">
         Sexo: <br>
            <select name="Sexo" id="Sexo">
                <option value="<?php echo $Sexo; ?>"><?php echo $Sexo; ?></option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outros">Outros</option>
            </select>
    </div>

    <div class="FormularioInput FormularioInput100 Center">
        <input type="submit" value="<?php echo $Acao; ?>">
    </div>

    </form>
</div>