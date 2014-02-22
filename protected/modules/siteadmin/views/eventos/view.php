<?php

$this->menu=array(
    array('label'=>'Voltar','icon'=>'arrow-left','url'=>array('admin')),
    array('label'=>'Atualizar Evento','icon'=>'pencil','url'=>array('update','id'=>$model->nGetId())),
    array('label'=>'Desligar/Ligar Evento',  'icon'=>'minus-sign', 'url'=>'#','linkOptions'=>array('submit'=>array('desligar','id'=>$model->nGetId()),'confirm'=>'Deseja Desligar/Ligar este cliente?')),
    array('label'=>'Excluir Evento',  'icon'=>'trash', 'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->nGetId()),'confirm'=>'Deseja realmente excluir este item?')),
    array('label'=>'Imagens'),
    array('label'=>'Gerenciar','icon'=>'picture','url'=>array('/siteadmin/imagens/verImagens', 'id'=>$model->nGetId(), 'tipo'=>$model->aGetTipo())), 
);
?>

<?php

$this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
                'ev_id',
                'ev_titulo',
                'ev_descricao',
                'aData',
                'aHora',
                'ev_local',
                array(
                    'label'=>'valor',
                    'type'=>'raw',
                    'value'=> 'R$ ' .$model->nGetValor(),
                    'visible'=>!empty($model->ev_valor)
                ),
                array(
                    'label'=>'Status',
                    'type'=>'raw',
                    'value'=> $model->ev_status ? 'Ativo' : 'Desligado'
                ),
),
)); ?>
