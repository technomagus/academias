<?php

Yii::import('zii.widgets.grid.CButtonColumn');

class tcAjaxButtonColumn extends CButtonColumn 
{
   public $url;
   public $legenda;
   public $atributte;
   public $seletor;
   public $icon;
   public $dialog;
   
   protected function makelink($legenda, $url,  $data = null)
   {
       
       if(!empty($this->url))
       {
           echo CHtml::link(
                '<i class="'.$this->icon.'"></i>',
                 "#", 
                        array(
                            'id'=>'permissoes',
                            'class'=>$this->icon,
                            'onclick'=>'
                                
                                $.get(
                                        "'.Yii::app()->createUrl($url).'" ,
                                        {id : '.$data[$this->atributte].' } ,
                                        function(data){
                                           console.log(data);
                                            $("#'.$this->seletor.'").append(data);
                                            $("#'.$this->dialog.'").dialog("open");
                                        }
                                     );

                            '
                        )
                    );
       }
       else
       {
           echo CHtml::link(
                '<i class="'.$this->icon.'"></i>',
                 "#", 
                        array(
                            'id'=>'permissoes',
                            'class'=>$this->icon,
                            'onclick'=>'
                                        $("#'.$this->dialog.'").dialog("open");

                            '
                        )
                    );
       }
   }
   
   public function init()
   {
      parent::init();
   }

   protected function renderDataCellContent($row,$data)
   {
         return parent::renderDataCellContent($row,$data);
   }   
   
   protected function renderButton($id, $button, $row, $data)
   {
      echo self::makelink($this->legenda, $this->url, $data);
   }
   
}
?>
