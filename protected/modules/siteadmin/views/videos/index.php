<?php
$this->breadcrumbs=array(
	'Videoses',
);

$this->menu=array(
array('label'=>'Create Videos','url'=>array('create')),
array('label'=>'Manage Videos','url'=>array('admin')),
);
?>

<h1>Videoses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
