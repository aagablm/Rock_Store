<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewHome;
use App\Db\Connection;
use App\Model\ModelProduto;

class ControllerHome extends ControllerPadrao
{

    protected function processPage()
    {
        $oModelProduto= new ModelProduto;
        
        $a = $oModelProduto->getAll();
         
        $sTitle = 'RockStore';

        $sContent = ViewHome::render([
            // Passar aqui os parâmetros do conteúdo da página
            'homeContent' => ViewHome::getCardProdutos($a)
        ]);

        $this->footerVars = [
            // Passar aqui os parametros do footer da página
            'footerContent' => '<h5>Bem-Vindo!</h5>'
        ];

        return parent::getPage(
            $sTitle,
            $sContent
        );
    }
}
