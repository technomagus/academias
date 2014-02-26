<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'admin-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Campos com <span class="required">*</span> são obrigatórios.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'adm_nome',array('class'=>'span5','maxlength'=>80)); ?>

	<?php echo $form->textFieldRow($model,'adm_email',array('class'=>'span5','maxlength'=>128)); ?>

	<?php 
        if($model->isNewRecord){
            echo $form->passwordFieldRow($model,'adm_senha',array('class'=>'span5','maxlength'=>32)); 
        }
        ?>
	<?php echo $form->dropDownListRow($model,'adm_nivel',$model->aGetNiveis(), array('class'=>'span2', 'empty'=>'Nivel de permissão')); ?>
        
	<?php
        if($model->isNewRecord){
            echo $form->checkBoxRow($model,'adm_status',array('class'=>'span1')); 
        }
        ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Incluir' : 'Alterar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
