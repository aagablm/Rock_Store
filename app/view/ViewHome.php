<?php

namespace App\View;

use App\View\ViewPadrao;

class ViewHome extends ViewPadrao
{
    static function getCardProdutos(array $a){
        
        $sHTML= '';
        
        foreach ($a as $x){
        $sHTML.= '<div class="card" style="width: 18rem;"><br>
            <img class="card-img-top" src='.$x["prodimg"]. 'alt="Produto">
            <div class="card-body">
              <h4 class="card-title">'.$x["prodtipo"].'</h4>
              <h6 class="card-text">Valor: '.$x["prodvalor"]. '</h6>
              <h6 class="card-text">Cor: '.$x["prodcor"]. '</h6>
              <a href="#" class="btn btn-secondary">Comprar</a><br>
            </div>
         </div>';}
        
        return $sHTML;
    }
}
