<?php
$this->breadcrumbs=array(
	'Admins',
);

$this->menu=array(
array('label'=>'Create Admin','url'=>array('create')),
array('label'=>'Manage Admin','url'=>array('admin')),
);
?>

<h1>Usuários</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
