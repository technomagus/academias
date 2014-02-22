<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'FINANCEIRO_ID',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'FIN_CLIENTEID',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'FIN_VALOR',array('class'=>'span5')); ?>

		<?php echo $form->textAreaRow($model,'FIN_DESCRICAO',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

		<?php echo $form->textFieldRow($model,'FIN_VENCIMENTO',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'FIN_BAIXA',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
