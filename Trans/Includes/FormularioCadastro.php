<?php
  print_r($_GET);

    include("Class/ClassCrud.php");
    /* Edição de dados */
    if(isset($_GET['id'])){
        $Acao="Editar";

        $Crud=new ClassCrud();
        $BFetch=$Crud->selectDB("*","financeiro","where Id=?",array($_GET['id']));
        $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
        $Id=$Fetch['id'];
        $Data=$Fetch['data'];
        $Tipo=$Fetch['tipo'];
        $Nome=$Fetch['nome'];
        $Categoria=$Fetch['categoria'];
        $Quantidade=$Fetch['quantidade'];
        $Conta=$Fetch['conta'];
        $Descricao=$Fetch['descricao'];
       
    }

    /* Cadastro novo */
    else{
        $Acao="Cadastrar";
        $Id=0;
        $Data= "";
        $Tipo="";
        $Nome="";
        $Categoria="";
        $Quantidade="";
        $Conta="";  
        $Descricao="";
    }
?>

<div >  

    <form name="FormCadastro" id="FormCadastro" method="post" action="Controllers/ControllerCadastro.php">
        <input type="hidden" id="Acao" name="Acao" value="<?php echo $Acao; ?>">
        <input type="hidden" id="Id" name="Id" value="<?php echo $Id; ?>">

    <div class="FormularioInput">
         Data: <br>
           <input type="date" name="Data" value="<?php echo $Data; ?>">
    </div>

    <div class="FormularioInput">
         Tipo da Transação: <br>
           <select name="Tipo" id="Tipo">
                <option value="<?php echo $Tipo; ?>"><?php echo $Tipo; ?></option>
                <option value="Despesas">Despesas</option>
                <option value="Receitas">Receitas</option>
                <option value="Transferencias">Transferências</option>
            </select>
    </div>

    <div class="FormularioInput">
        Nome: <br>
        <input  type="text" id="Nome" name="Nome" value="<?php echo $Nome; ?>">
    </div>

    <div class="FormularioInput">
         Categoria: <br>
            <select name="Categoria" id="Categoria">
                <option value="<?php echo $Categoria; ?>"><?php echo $Categoria; ?></option>
                <option value="Alimentaçao">Alimentação</option>
                <option value="Supermercado">Supermercado</option>
                <option value="Aluguel">Aluguel</option>
                <option >------------------</option>
                <option value="Salario">Salário</option>
                <option value="Bonus">Bônus</option>
                <option value="Honorarios de serviços prestados">Honorários de serviços prestados</option>
                <option value="Rendimentos das aplicações financeiras">Rendimentos das aplicações financeiras</option>
                <option >------------------</option>
                <option value="Conta1">Conta1</option>
                <option value="Conta2">Conta2</option>
                <option value="Minha Conta">Minha Conta</option>
            </select>
    </div>

    <div class="FormularioInput">
        Quantidade: <br>
        <input placeholder="R$:000.000.000"  type="text" id="Quantidade" name="Quantidade" value="<?php echo $Quantidade; ?>">
    </div>

    
    <div class="FormularioInput">
         Conta: <br>
          <select name="Conta" id="Conta">
                <option value="<?php echo $Conta; ?>"><?php echo $Conta; ?></option>
                <option value="Salario">Salario</option>
                <option value="Corrente">Corrente</option>
                <option value="Dinheiro">Dinheiro</option>
            </select>
    </div>

    <div class="FormularioInput">
         Descrição: <br>
           <input type="text" name="Descricao" value="<?php echo $Descricao; ?>">
    </div>

    <div class="FormularioInput FormularioInput100 Center">
        <input type="submit" value="<?php echo $Acao; ?>">
    </div>

    </form>
</div>