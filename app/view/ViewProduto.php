<?php

namespace App\View;

use App\View\ViewProduto;

class ViewProduto extends ViewPadrao
{
    static function getHtmlTabelaProdutos(array $a){
       
        $sHtml= '
            <table class="table"
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Cor</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Imagem</th>
                    </tr>
                </thead>
            <tbody>';
       
        foreach ($a as $x){
            $sHtml .= '
                <tr>
                <td>'. $x["prodid"]. '</td>
                <td>'. $x["prodtipo"]. '</td>
                <td>'. $x["prodcor"]. '</td>
                <td>'. $x["prodvalor"]. '</td>
                <td>'. $x["prodimg"]. '</td>


                <td> <a href="index.php?pg=produto&act=delete&proid='.$x['prodid'].'">Deletar</a> </td>
                </tr>';  
        }
       
       
       return $sHtml;
     
     
  }
}


        
