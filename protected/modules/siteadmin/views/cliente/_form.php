<?php 
Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl.'/js/jquery/jquery.nlcpfcnpj.min.js') ; 

Yii::app()->clientScript->registerScript("cpf_cnpj","
    $('#CPFCNPJ').nlcpfcnpj('999.999.999-99');
");


Yii::app()->clientScript->registerScript("desabilitaSubmitOnEnter","  
            $('#cliente-form').bind('keyup keypress', function(e) {
                  var code = e.keyCode || e.which; 
                  if (code  == 13) {               
                    e.preventDefault();
                    return false;
                  }
            });
        ");

Yii::app()->clientScript->registerScript("buscacep","
    
            $('#bcep').bind('keyup keypress', function(e) 
            {
                  var code = e.keyCode || e.which; 
                  console.log(code);
                  if (code  == 13) {               
                     var cep = $(this).val();
                      var url = '".Yii::app()->createUrl('/siteadmin/Endereco/getEndereco/')."';
                          cep = cep.replace('-','');
                          console.log(url);
                          $.ajax({
                                  url: url,
                                  data:{ cep:cep },
                                }).done(function(data){
                                    tmp = data.split('|');
                                    console.log(tmp);
                                    $('#bairro').val(tmp[1]);
                                    $('#cidade').val(tmp[2]);
                                    $('#uf').val(tmp[3]);
                                    $('#endereco').val(tmp[0]);
                                });
                  }
            });
    ");


$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'cliente-form',
	'enableAjaxValidation'=>false,
)); ?>



<?php // $this->widget('ext.takephoto.takephoto'); ?>

<?php echo $form->errorSummary($model); ?>
	<?php echo $form->textFieldRow($model,'CLI_NOME',array('class'=>'span6','maxlength'=>50,)); ?>
            <div class="row-fluid">
                <div class="span3">
                <?php echo $form->textFieldRow($model,'CLI_CPF',array('class'=>'span12', 'id'=>'CPFCNPJ','maxlength'=>24, )); ?>
                </div>    
                <div class="span3">
                <?php echo $form->textFieldRow($model,'CLI_RG',array('class'=>'span12','maxlength'=>24,)); ?>
                    </div>
            </div>    
        <?php $this->widget('ext.datetimepicker.datetimepicker',array('model'=>$model,'attribute'=>'CLI_DATANASCIMENTO','id'=>'CLI_DATANASCIMENTO', 'lb'=>'Data Nascimento', 'style'=>'margin:10px;')); ?>
        <?php $this->widget('ext.datetimepicker.datetimepicker',array('model'=>$model,'attribute'=>'CLI_DATAMATRICULA','id'=>'CLI_DATAMATRICULA','lb'=>'Data Matricula','style'=>'margin:10px;')); ?>


	<?php echo $form->textFieldRow($model,'CLI_FOTO',array('class'=>'span6', 'style'=>'margin:10px;')); ?>
        <br/>
	<?php echo $form->maskedTextFieldRow($model,'CLI_CEP','99999-999',array('class'=>'span2','maxlength'=>9, 'style'=>'margin:10px;','id'=>'bcep')); ?>
        <br/>
	<?php echo $form->textFieldRow($model,'CLI_CIDADE',array('class'=>'span5','maxlength'=>60, 'style'=>'margin:10px;', 'id'=>'cidade')); ?>

	<?php echo $form->textFieldRow($model,'CLI_UF',array('class'=>'span1','maxlength'=>2, 'style'=>'margin:10px;', 'id'=>'uf')); ?>

	<?php echo $form->textFieldRow($model,'CLI_BAIRRO',array('class'=>'span5','maxlength'=>40, 'style'=>'margin:10px;', 'id'=>'bairro')); ?>

	<?php echo $form->textFieldRow($model,'CLI_ENDERECO',array('class'=>'span8','maxlength'=>60, 'style'=>'margin:10px;', 'id'=>'endereco')); ?>

	<?php echo $form->maskedTextFieldRow($model,'CLI_FONE','(99)9999-9999',array('class'=>'span2','maxlength'=>24, 'style'=>'margin:10px;')); ?>

	<?php echo $form->maskedTextFieldRow($model,'CLI_CELULAR','(99)9999-9999',array('class'=>'span2','maxlength'=>24, 'style'=>'margin:10px;')); ?>

	<?php echo $form->textFieldRow($model,'CLI_EMAIL',array('class'=>'span6','maxlength'=>100, 'style'=>'margin:10px;')); ?>
        
        <?php echo $form->checkboxRow($model, 'CLI_STATUS'); ?>

	

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType'=>'submit',
                    'type'=>'primary',
                    'label'=>$model->isNewRecord ? 'Create' : 'Save',
            )); ?>
</div>

<?php $this->endWidget(); ?>
