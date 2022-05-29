<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewProduto;
use App\Db\Connection;
use App\Model\ModelProduto;

class ControllerProduto extends ControllerPadrao
{
    function processPage(){
        /*var_dump(Connection::get());*/
        
        $oModelProduto= new ModelProduto;
        
        $a = $oModelProduto->getAll();
        
        /*var_dump($a);*/
        
        $sTitle = 'Produtos';
        
        $sContent = ViewProduto::render([
            'produtoContent' => '<h1>Produtos</h1>',
            'tabelaProduto' => ViewProduto::getHtmlTabelaProdutos($a)
        
            
        ]);
         
    return parent::getPage(
        $sTitle,
        $sContent
    );
            
    }
     function processDelete(){
    $iIdProduto= $_GET['proid'] ??='';
    
    $oModelProduto = new ModelProduto;
    $oModelProduto->id = $iIdProduto;
    
    $this->footerVars=[
     'footerContent' => ''  
    ];
    
    if($oModelProduto->deleteProduto()){
        $this->footerVars = [
            'footerContent' => '<div class="alert alert-success" role="alert">
             Produto Excluído com Sucesso! </div>'
    ];}
    return $this->processPage();
    }
    
    function processInsert (){ 
    $iProdtipo= $_POST['prodtipo'] ??='';
    $iProdcor= $_POST['prodcor'] ??='';
    $iProdvalor= $_POST['prodvalor'] ??='';
    $iProdimg= $_POST['prodimg'] ??='';
    
    $oModelProduto = new ModelProduto;
    $oModelProduto->prodtipo = $iProdtipo;
    $oModelProduto->prodcor = $iProdcor;
    $oModelProduto->prodvalor = $iProdvalor;
    $oModelProduto->prodimg = $iProdimg;
    
      $this->footerVars=[
     'footerContent' => ''
    ];
    
    if($oModelProduto->insertProduto()){
        $this->footerVars = [
            'footerContent' => '<div class="alert alert-success" role="alert">
             Produto Inserido com Sucesso! </div>'
    ];}
    return $this->processPage();
    }
    
}

