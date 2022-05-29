<?php

namespace App\Model;

use App\Model\ModelPadrao;

class ModelProduto extends ModelPadrao 
{ public $id;
  public $iProdtipo;
  public $iProdcor;
  public $iProdvalor;
  public $iProdimg;
        
     function getTable(){
        return 'LOJA.TBPRODUTO';
     }

    function deleteProduto()
    {
    $iId = $this->id;
    
    return parent::delete([
        'prodid' =>$iId]);
    }
    function insertProduto()
    {
    $iProdtipo= $this->getBdValue($this->prodtipo);
    $iProdcor= $this->getBdValue($this->prodcor);
    $iProdvalor= $this->getBdValue($this->prodvalor);
    $iProdimg= $this->getBdValue($this->prodimg);
    
      return parent::insert([
        'prodtipo' =>$iProdtipo, 'prodcor' =>$iProdcor, 'prodvalor' =>$iProdvalor,'prodimg' =>$iProdimg ]);
    }
    
    }
   
?>
