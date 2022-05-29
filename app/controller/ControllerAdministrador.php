<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewAdministrador;


class ControllerAdministrador extends ControllerPadrao
{

    protected function processPage()
    {
        $sTitle = 'Administrador';

        $sContent = ViewAdministrador::render([
            'administradorContent' => '<h1>Página Administrador</h1>'
        ]);

        return parent::getPage(
            $sTitle,
            $sContent
        );
    }
}
