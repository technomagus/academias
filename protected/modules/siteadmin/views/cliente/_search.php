<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'CLIENTE_ID',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'CLI_NOME',array('class'=>'span5','maxlength'=>50)); ?>

		<?php echo $form->textFieldRow($model,'CLI_CPF',array('class'=>'span5','maxlength'=>24)); ?>

		<?php echo $form->textFieldRow($model,'CLI_RG',array('class'=>'span5','maxlength'=>24)); ?>

		<?php echo $form->textFieldRow($model,'CLI_DATANASCIMENTO',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'CLI_DATAMATRICULA',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'CLI_FOTO',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'CLI_CEP',array('class'=>'span5','maxlength'=>9)); ?>

		<?php echo $form->textFieldRow($model,'CLI_CIDADE',array('class'=>'span5','maxlength'=>60)); ?>

		<?php echo $form->textFieldRow($model,'CLI_UF',array('class'=>'span5','maxlength'=>2)); ?>

		<?php echo $form->textFieldRow($model,'CLI_BAIRRO',array('class'=>'span5','maxlength'=>40)); ?>

		<?php echo $form->textFieldRow($model,'CLI_ENDERECO',array('class'=>'span5','maxlength'=>60)); ?>

		<?php echo $form->textFieldRow($model,'CLI_LOGRAOUDO',array('class'=>'span5','maxlength'=>40)); ?>

		<?php echo $form->textFieldRow($model,'CLI_FONE',array('class'=>'span5','maxlength'=>24)); ?>

		<?php echo $form->textFieldRow($model,'CLI_CELULAR',array('class'=>'span5','maxlength'=>24)); ?>

		<?php echo $form->textFieldRow($model,'CLI_EMAIL',array('class'=>'span5','maxlength'=>100)); ?>

		<?php echo $form->textFieldRow($model,'CLI_STATUS',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
