<?php

Yii::import('zii.widgets.grid.CButtonColumn');

class tcButtonColumn extends CButtonColumn 
{
   public $url;
   public $legenda;
   public $atributte;
   public $subid;
   public $ver;
   
   
   protected function makelink($legenda, $url,  $data = null)
   {
      return CHtml::link($legenda,
                         Yii::app()->createAbsoluteUrl($url)
                        );
   }
   
   public function init()
   {
      parent::init();
      
   }

   protected function renderDataCellContent($row,$data)
   {
      if($this->ver != true)
      {
         if(isset($data['IndicaAguardaRetorno']))
            if($data['IndicaAguardaRetorno'] == 0 && $this->visible != 1)
               return;
            if(isset($data['Ativo']))
               if($data['Ativo'] == 0)
                  return;
         if(isset($data['fTarefa']))
         {
            if($data['fTarefa'] == 1)
               return;
         }
      }
      return parent::renderDataCellContent($row,$data);   
   }   
   
   protected function renderButton($id, $button, $row, $data)
   {
      $tmp = explode("/",$this->url);
      $aux = "";
      $tmp = explode("-",$this->legenda);
      if($tmp[0] == "icon")
      {
         $legenda = "<i class='";
         for($i = 0; $i < count($tmp)-1;$i++)
         {
            $legenda .= $tmp[$i]."-";
         }
         $legenda .= $tmp[$i]."'></i>";
      }
      else
         $legenda = $this->legenda;
         
      $tmp = explode("-",$data[$this->atributte]);
      if(!empty($tmp))
      {
         $saida = "";
         foreach($tmp as $data) 
         {
            $saida .= $data;
         }
         $tmp = $saida;
      }
      else
         $tmp = $data[$this->atributte];
      if(!empty($this->subid))
         echo self::makelink($legenda, $this->url."/".$tmp."-".$this->subid);
      else
         echo self::makelink($legenda, $this->url."/".$tmp);
   }
}
?>
