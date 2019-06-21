<?php
 
    use ItemVenda\ItemVenda;
    use Venda\Venda;
    use VendaException\VendaException;
 
    require_once "VendaException.php";
    require_once "Venda.php";
    require_once "ItemVenda.php";
 
    try {
        $camisa = new ItemVenda();
        $camisa->setDescricao("Camisa Polo");
        $camisa->setPreco(11.0);
 
        $bone = new ItemVenda();
        $bone->setDescricao("Boné Infantil");
        $bone->setPreco(11.0);
 
        $Venda = new Venda();
        $Venda->adicionar($camisa);
        $Venda->adicionar($bone);
 
        print  "Total da venda: " . $Venda->getTotal();
    } catch (VendaException $e){
        echo "VendaException: " . $e->getMessage()  . " - Código: "  . $e->getCodigo();
    } finally {
        echo "</br>Processamento encerrado";
    }