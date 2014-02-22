<?php

$this->menu=array(
array('label'=>'Voltar','icon'=>'arrow-left','url'=>array('admin', 'id'=>$model->FIN_CLIENTEID)),
);
?>

<h2>Nova Parcela</h2>

<?php
$this->widget('bootstrap.widgets.TbTabs', array(
                'type'=>'tabs',
                'tabs'=>array(
                    array('label'=>'Ativos', 'content'=>
 $this->renderPartial('_form', array('model'=>$model),true)
, 'active'=>true))
        )
    );