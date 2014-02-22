<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'slider-form',
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array(
            'enctype'=>'multipart/form-data',
        )
)); ?>

<p class="help-block">Campos com <span class="required">*</span> são obrigatórios.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'sl_titulo',array('class'=>'span5','maxlength'=>256)); ?>

	<?php echo $form->fileFieldRow($model,'sl_img',array('class'=>'span5','maxlength'=>256)); ?>

	<?php echo $form->textFieldRow($model,'sl_link',array('class'=>'span5','maxlength'=>256)); ?>

	<?php echo $form->textFieldRow($model,'sl_descricao',array('class'=>'span5','maxlength'=>256)); ?>

	<?php echo $form->checkBoxRow($model,'sl_status',array('class'=>'span1')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Cadastrar' : 'Salvar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
