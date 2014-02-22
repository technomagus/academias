<?php
$this->breadcrumbs=array(
	'Financeiros'=>array('index'),
	$model->FINANCEIRO_ID=>array('view','id'=>$model->FINANCEIRO_ID),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Financeiro','url'=>array('index')),
	array('label'=>'Create Financeiro','url'=>array('create')),
	array('label'=>'View Financeiro','url'=>array('view','id'=>$model->FINANCEIRO_ID)),
	array('label'=>'Manage Financeiro','url'=>array('admin')),
	);
	?>

	<h3>Financeiro <?php echo $model->FINANCEIRO_ID; ?></h3>

<?php
$this->widget('bootstrap.widgets.TbTabs', array(
                'type'=>'tabs',
                'tabs'=>array(
                    array('label'=>'Ativos', 'content'=>
 $this->renderPartial('_form', array('model'=>$model),true)
, 'active'=>true))
        )
    );