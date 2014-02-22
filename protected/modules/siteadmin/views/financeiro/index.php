<?php
$this->breadcrumbs=array(
	'Financeiros',
);

$this->menu=array(
array('label'=>'Create Financeiro','url'=>array('create')),
array('label'=>'Manage Financeiro','url'=>array('admin')),
);
?>

<h1>Financeiros</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
