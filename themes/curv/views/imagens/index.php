<?php
$this->breadcrumbs=array(
	'Imagens',
);

$this->menu=array(
array('label'=>'Create Imagens','url'=>array('create')),
array('label'=>'Manage Imagens','url'=>array('admin')),
);
?>

<h1>Imagens</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
