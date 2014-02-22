<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'adm_id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'adm_nome',array('class'=>'span5','maxlength'=>80)); ?>

		<?php echo $form->textFieldRow($model,'adm_email',array('class'=>'span5','maxlength'=>128)); ?>

		<?php echo $form->textFieldRow($model,'adm_senha',array('class'=>'span5','maxlength'=>32)); ?>

		<?php echo $form->textFieldRow($model,'adm_nivel',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'adm_status',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
