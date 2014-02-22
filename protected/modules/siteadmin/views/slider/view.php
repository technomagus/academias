<?php

$this->menu=array(
    array('label'=>'<i class="icon-home"></i>Páginá Inicial Administrativa','url'=>array('/site/admin')),
    '',
    array('label'=>'<i class="icon-picture"></i>Listar Slider','url'=>array('index')),
    array('label'=>'<i class="icon-picture"></i>Cadastrar Slider','url'=>array('create')),
    array('label'=>'<i class="icon-picture"></i>Atualizar Slider','url'=>array('update','id'=>$model->sl_id)),
    array('label'=>'<i class="icon-picture"></i>Deletar Slider','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->sl_id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'<i class="icon-picture"></i>Administrar Slider','url'=>array('admin')),
    '',
    array('label'=>'<i class="icon-off"></i>Sair', 'url'=>array('/site/logout'))
);
?>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'sl_id',
		'sl_titulo',
		'sl_link',
		'sl_descricao',
		'sl_dtcriacao',
		'sl_status',
),
)); ?>
