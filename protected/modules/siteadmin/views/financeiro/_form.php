<?php
Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl.'/js/jquery/jquery.price_formate.min.js') ;


Yii::app()->clientScript->registerScript('preco_format','
      $("#FIN_VALOR").priceFormat({
                         prefix: "R$ ",
                         centsSeparator: ",",
                         thousandsSeparator: "."
      });
');
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'financeiro-form',
        'type' => 'inline',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'FIN_CLIENTEID',array('class'=>'span5', 'style'=>'margin:10px;')); ?>

	<?php echo $form->textFieldRow($model,'FIN_VALOR',array('class'=>'span5','id'=>'FIN_VALOR','style'=>'margin:10px;')); ?>

	<?php echo $form->textAreaRow($model,'FIN_DESCRICAO',array('rows'=>6, 'cols'=>50, 'class'=>'span8','style'=>'margin:10px;')); ?>

	

        <?php $this->widget('ext.datetimepicker.datetimepicker',array('model'=>$model,'attribute'=>'FIN_VENCIMENTO','id'=>'FIN_VENCIMENTO', 'lb'=>'Vencimento da Parcela', 'style'=>'margin:10px;')); ?>
        <?php $this->widget('ext.datetimepicker.datetimepicker',array('model'=>$model,'attribute'=>'FIN_BAIXA','id'=>'FIN_BAIXA','lb'=>'Data Baixa Recebimento','style'=>'margin:10px;','pickTime'=>true)); ?>


<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Incluir' : 'Salvar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
