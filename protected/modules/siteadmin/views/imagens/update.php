<?php
$this->menu=array(
    array('label'=>'Voltar','icon'=>'arrow-left','url'=>array('verImagens', 'id'=>$model->nGetIdEStran(), 'tipo'=>$model->aGetTipo())),
    array('label'=>'Excluir Imagem',  'icon'=>'trash', 'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->im_id),'confirm'=>'Deseja realmente excluir este item?')),
);
	?>

	<h3>Atualizar Imagem </h3>
<div class="row-fluid">
    <div class="span12">
    </div>
</div>
<?php $this->widget('bootstrap.widgets.TbTabs', array(
                'type'=>'tabs',
                'tabs'=>array(
                    array('label'=>'Atualizar', 'content'=>
                        CHtml::image($model->im_imagem) .
                        CController::renderPartial('_form', array(
                            'model'=>$model
                        ), true),
                'active'=>true))
)); ?>