<?php

Yii::import('zii.widgets.grid.CButtonColumn');

class tcButtonBaixaParcela extends CButtonColumn 
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
                                            tmp = data.split("|");
                                            console.log(tmp);
                                            $("#'.$this->seletor[0].'").attr("cdparc",tmp[0]);
                                            $("#'.$this->seletor[0].'").val(tmp[1]);
                                            $(".redactor_editor").html(tmp[2]);
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
