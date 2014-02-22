<?php
$this->breadcrumbs=array(
	'Sliders'=>array('index'),
	$model->sl_id=>array('view','id'=>$model->sl_id),
	'Update',
);

	$this->menu=array(
              array('label'=>'Voltar','icon'=>'arrow-left','url'=>array('admin')),
	);
	?>

	<h1>Atualizar Slider <?php echo $model->sl_id; ?></h1>

<?php
$this->widget('bootstrap.widgets.TbTabs', array(
                'type'=>'tabs',
                'tabs'=>array(
                    array('label'=>'Ativos', 'content'=>
 $this->renderPartial('_form', array('model'=>$model),true)
, 'active'=>true))
        )
    );