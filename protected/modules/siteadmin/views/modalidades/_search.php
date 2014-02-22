<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'MODALIDADE_ID',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'MOD_TITULO',array('class'=>'span5','maxlength'=>40)); ?>

		<?php echo $form->textAreaRow($model,'MOD_DESCRICAO',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

		<?php echo $form->textFieldRow($model,'MOD_IMAGE',array('class'=>'span5')); ?>

		<?php echo $form->textAreaRow($model,'MOD_HORARIOxTURNOxPRECO',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

		<?php echo $form->textFieldRow($model,'MOD_STATUS',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
