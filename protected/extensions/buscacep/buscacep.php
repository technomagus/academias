<?php

class takephoto extends CWidget{
    public $model;
    public $atributo;
    public function init(){
        parent::init();
//        Yii::app()->clientScript->registerCoreScript( 'jquery' );
       
         Yii::app()->clientScript->registerScript(CClientScript::POS_LOAD, "
                var consulta = ".$atribute.";
               $.getScript('http://www.toolsweb.com.br/webservice/clienteWebService.php?cep='+consulta+'&formato=javascript', function(){
                    //unescape - Decodifica uma string codificada com o m&#233;todo escape.
                    rua=unescape(resultadoCEP.logradouro)
                    bairro=unescape(resultadoCEP.bairro)
                    cidade=unescape(resultadoCEP.cidade)
                    uf=unescape(resultadoCEP.uf)
                    // preenche os campos
                    $('#rua').val(rua)
                    $('#bairro').val(bairro)
                    $('#cidade').val(cidade)
                    $('#uf').val(uf)
                });
            });
        }); 
    ");
        
                 
        
    }
    
    public function run() {
                parent::run();

               $label   = $aSaida = CHtml::activeLabelEx($this->model, $this->atributo);
               $numero  = CHtml::activeTextField($this->modelCad, $this->atributo,array('id'=>$this->atributo,'class'=>'span2'));
               echo "<div>".$label." ".$numero."</div>";
    }
}



?>

