<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'videos-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Campos com <span class="required">*</span> são obrigatorios.</p>

<?php echo $form->errorSummary($model); ?>
    
	<?php echo $form->textFieldRow($model,'clink',array('class'=>'span5','maxlength'=>180)); ?>

        <?php echo $form->textFieldRow($model,'Titulo',array('class'=>'span5','maxlength'=>40)); ?>

        <?php echo $form->textAreaRow($model,'Descricao',array('rows'=>6, 'cols'=>50, 'class'=>'span8','style'=>'margin:10px;')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Novo' : 'Salvar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
