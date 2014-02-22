<?php

$this->menu=array(
    array('label'=>'Voltar','icon'=>'arrow-left','url'=>array('admin')),
    array('label'=>'Atualizar Modalidade','icon'=>'pencil','url'=>array('update','id'=>$model->MODALIDADE_ID)),
    array('label'=>'Desligar/Ligar Modalidade',  'icon'=>'minus-sign', 'url'=>'#','linkOptions'=>array('submit'=>array('desligar','id'=>$model->MODALIDADE_ID),'confirm'=>'Deseja Desligar/Ligar este cliente?')),
    array('label'=>'Excluir Modalidade',  'icon'=>'trash', 'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->MODALIDADE_ID),'confirm'=>'Deseja realmente excluir este item?')),
    array('label'=>'Imagens'),
    array('label'=>'Gerenciar','icon'=>'picture','url'=>array('/siteadmin/imagens/verImagens', 'id'=>$model->nGetId(), 'tipo'=>$model->aGetTipo())),
);
?>

<?php

$this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'MODALIDADE_ID',
		'MOD_TITULO',
                array(
                    'label'=>'Descrição',
                    'type'=>'raw',
                    'value'=>$model->aGetPeqDescri(256)
                ),
                array(
                    'label'=>'Status',
                    'type'=>'raw',
                    'value'=> $model->MOD_STATUS ? 'Ativo' : 'Desligado'
                ),
),
)); ?>
