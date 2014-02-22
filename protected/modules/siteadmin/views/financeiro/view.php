<?php
$this->breadcrumbs=array(
	'Financeiros'=>array('index'),
	$model->FINANCEIRO_ID,
);

$this->menu=array(
array('label'=>'List Financeiro','url'=>array('index')),
array('label'=>'Create Financeiro','url'=>array('create')),
array('label'=>'Update Financeiro','url'=>array('update','id'=>$model->FINANCEIRO_ID)),
array('label'=>'Delete Financeiro','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->FINANCEIRO_ID),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Financeiro','url'=>array('admin')),
);
?>

<h1>View Financeiro #<?php echo $model->FINANCEIRO_ID; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'FINANCEIRO_ID',
		'FIN_CLIENTEID',
		'FIN_VALOR',
		'FIN_DESCRICAO',
		'FIN_VENCIMENTO',
		'FIN_BAIXA',
),
)); ?>
