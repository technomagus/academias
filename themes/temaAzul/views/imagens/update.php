<?php
$this->breadcrumbs=array(
	'Imagens'=>array('index'),
	$model->im_id=>array('view','id'=>$model->im_id),
	'Update',
);
	$this->menu=array(
                array('label'=>'<i class="icon-home"></i>Páginá Inicial Administrativa','url'=>array('/site/admin')),
                '',
                array('label'=>'<i class="icon-picture"></i>Administrar Imagens','url'=>array('admin')),
                '',
                array('label'=>'<i class="icon-off"></i>Sair', 'url'=>array('/site/logout'))
	);
//	$this->menu=array(
//	array('label'=>'List Imagens','url'=>array('index')),
//	array('label'=>'Create Imagens','url'=>array('create')),
//	array('label'=>'View Imagens','url'=>array('view','id'=>$model->im_id)),
//	array('label'=>'Manage Imagens','url'=>array('admin')),
//	);
	?>

	<h1>Atualizar Imagem </h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>