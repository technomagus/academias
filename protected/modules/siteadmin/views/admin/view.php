<?php
$this->menu=array(
    array('label'=>'Voltar','icon'=>'arrow-left','url'=>array('admin')),
    array('label'=>'Atualizar Usuário','icon'=>'pencil','url'=>array('update','id'=>$model->adm_id)),
    array('label'=>'Desligar/Ligar Usuário',  'icon'=>'minus-sign', 'url'=>'#','linkOptions'=>array('submit'=>array('desligar','id'=>$model->adm_id),'confirm'=>'Deseja Desligar/Ligar este cliente?')),
    array('label'=>'Excluir Usuário',  'icon'=>'trash', 'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->adm_id),'confirm'=>'Deseja realmente excluir este item?')),
);
?>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'adm_id',
		'adm_nome',
		'adm_email',
                array(
                    'label'=>'Nivel',
                    'type'=>'raw',
                    'value'=>$model->aGetNomeNivel(),   
                ),
                array(
                    'label'=>'Status',
                    'type'=>'raw',
                    'value'=> $model->adm_status ? 'Ativo' : 'Desligado'
                ),
),
)); ?>
