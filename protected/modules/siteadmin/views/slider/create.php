<?php
$this->breadcrumbs=array(
	'Sliders'=>array('index'),
	'Create',
);

$this->menu=array(
    array('label'=>'Voltar','icon'=>'arrow-left','url'=>array('admin')),
);
?>

<h1>Cadastrar Slider</h1>

<?php
$this->widget('bootstrap.widgets.TbTabs', array(
                'type'=>'tabs',
                'tabs'=>array(
                    array('label'=>'Ativos', 'content'=>
 $this->renderPartial('_form', array('model'=>$model),true)
, 'active'=>true))
        )
    );