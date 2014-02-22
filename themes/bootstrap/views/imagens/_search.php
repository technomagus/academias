<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'im_id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'im_id_estran',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'im_tipo',array('class'=>'span5','maxlength'=>20)); ?>

		<?php echo $form->textFieldRow($model,'im_imagem',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'im_titulo',array('class'=>'span5','maxlength'=>40)); ?>

		<?php echo $form->textFieldRow($model,'im_descricao',array('class'=>'span5','maxlength'=>128)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
