<?php
class datetimepicker extends CWidget {

	public $assets = '';
	public $id;
	public $model;
        public $attribute;
        public $pickTime = 0;
        public $lb;
        public $style;
        public $value;
	public function init() {
		$this->assets = Yii::app()->assetManager->publish(dirname(__FILE__).DIRECTORY_SEPARATOR.'assets');
		
		Yii::app()->clientScript
		->registerScriptFile( $this->assets.'/bootstrap-datetimepicker.min.js' )

		->registerCssFile( $this->assets.'/bootstrap-datetimepicker.min.css' );
		
                Yii::app()->clientScript->registerScript($this->attribute,"
                   $('#$this->id').datetimepicker({
                                           language: 'pt-BR',
                                           maskInput: true,
                                           
                                           pickTime: {$this->pickTime}
                                        });
                 ");
      
 
		parent::init();
	}
        
        public function returnDatetimepicker()
        {
           $aSaida  = '<div id="'.$this->id.'" class="input-append date" style="'.$this->style.'">';
                 $aSaida  .= CHtml::activeLabelEx($this->model, $this->attribute);
                 if($this->pickTime)
                    $aSaida .= CHtml::activeTextField($this->model, $this->id,array('id'=>$this->id, 'data-format'=>'dd-MM-yyyy hh:mm:ss','placeholder'=>$this->lb));  
                 else
                    $aSaida .= CHtml::activeTextField($this->model, $this->id,array('id'=>$this->id, 'data-format'=>'dd-MM-yyyy','placeholder'=>$this->lb));  
                 $aSaida .= '<span class="add-on">';
                   $aSaida .= '<i data-time-icon="icon-time" data-date-icon="icon-calendar">';
                   $aSaida .= '</i>';
                $aSaida .= '</span>';   
            $aSaida .= "</div>";
           return $aSaida;
        }
        
        public function simpleDatetimepicker()
        {
            $aSaida  = '<div id="'.$this->id.'" class="input-append date" style="'.$this->style.'">';
//                 $aSaida  .= CHtml::activeLabelEx($this->model, $this->attribute);
                 if($this->pickTime)
                     $aSaida .= CHtml::textField ('data', $this->value, array('id'=>$this->id, 'data-format'=>'dd-MM-yyyy hh:mm:ss'));
                 else
                    $aSaida .= CHtml::textField ('data', $this->value, array('id'=>$this->id, 'data-format'=>'dd-MM-yyyy'));
                 $aSaida .= '<span class="add-on">';
                   $aSaida .= '<i data-time-icon="icon-time" data-date-icon="icon-calendar">';
                   $aSaida .= '</i>';
                $aSaida .= '</span>';   
            $aSaida .= "</div>";
           return $aSaida;
        }
        

        
	public function run(){
		parent::run();	
                if(empty($this->model))
                    echo $this->simpleDatetimepicker();
                else
                    echo  $this->returnDatetimepicker();
	}
}
?>