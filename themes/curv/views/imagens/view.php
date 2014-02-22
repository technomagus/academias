<?php
$this->breadcrumbs=array(
	'Imagens'=>array('index'),
	$model->im_id,
);

$this->menu=array(
array('label'=>'List Imagens','url'=>array('index')),
array('label'=>'Create Imagens','url'=>array('create')),
array('label'=>'Update Imagens','url'=>array('update','id'=>$model->im_id)),
array('label'=>'Delete Imagens','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->im_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Imagens','url'=>array('admin')),
);
?>

<h1>View Imagens #<?php echo $model->im_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'im_id',
		'im_id_estran',
		'im_tipo',
		'im_imagem',
		'im_titulo',
		'im_descricao',
),
)); ?>
