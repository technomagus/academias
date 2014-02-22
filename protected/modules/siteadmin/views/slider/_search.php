<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'sl_id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'sl_titulo',array('class'=>'span5','maxlength'=>256)); ?>

		<?php echo $form->textFieldRow($model,'sl_link',array('class'=>'span5','maxlength'=>256)); ?>

		<?php echo $form->textFieldRow($model,'sl_descricao',array('class'=>'span5','maxlength'=>256)); ?>

		<?php echo $form->textFieldRow($model,'sl_dtcriacao',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'sl_status',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
