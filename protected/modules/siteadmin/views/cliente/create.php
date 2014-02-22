<?php

$this->menu=array(
array('label'=>'Votar','icon'=>'arrow-left','url'=>array('index')),
);
?>

<h1>Novo Cliente</h1>
<?php
$this->widget('bootstrap.widgets.TbTabs', array(
                'type'=>'tabs',
                'tabs'=>array(
                    array('label'=>'Ativos', 'content'=>
 $this->renderPartial('_form', array('model'=>$model),true)
, 'active'=>true))
        )
    );