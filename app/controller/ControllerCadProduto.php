<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewCadProduto;


class ControllerCadProduto extends ControllerPadrao
{

    protected function processPage()
    {
        $sTitle = 'Cadastro de Produtos';

        $sContent = ViewCadProduto::render([
            'cadprodutoContent' => '<h1>Cadastro de Produtos</h1>'
        ]);

        return parent::getPage(
            $sTitle,
            $sContent
        );
    }
}
