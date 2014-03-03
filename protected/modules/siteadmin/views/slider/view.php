<?php

$this->menu=array(
    array('label'=>'Voltar','icon'=>'arrow-left','url'=>array('admin')),
    array('label'=>'Atualizar slider','icon'=>'pencil','url'=>array('update','id'=>$model->sl_id)),
    array('label'=>'Desligar/Ligar Slider',  'icon'=>'minus-sign', 'url'=>'#','linkOptions'=>array('submit'=>array('desligar','id'=>$model->sl_id),'confirm'=>'Deseja Desligar/Ligar este slider?')),
    array('label'=>'Excluir Slider',  'icon'=>'trash', 'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->sl_id,'confirm'=>'Deseja realmente excluir este item?')),
));
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
