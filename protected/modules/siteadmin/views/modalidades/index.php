<?php
$this->breadcrumbs=array(
	'Modalidades',
);

$this->menu=array(
array('label'=>'Create Modalidades','url'=>array('create')),
array('label'=>'Manage Modalidades','url'=>array('admin')),
);
?>

<h1>Modalidades</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
