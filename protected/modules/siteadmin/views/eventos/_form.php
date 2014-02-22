<?php
Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl.'/js/jquery/jquery.price_formate.min.js') ;


Yii::app()->clientScript->registerScript('preco_format','
      $("#evValor").priceFormat({
                         prefix: "R$ ",
                         centsSeparator: ",",
                         thousandsSeparator: "."
      });
');
?>


<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'eventos-form',
	'enableAjaxValidation'=>false,
   
)); ?>

<p class="help-block">Campos com <span class="required">*</span> são obrigatorios.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'ev_titulo',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'ev_descricao',array('class'=>'span5','maxlength'=>256)); ?>

	<?php 
            $this->widget(
                'bootstrap.widgets.TbRedactorJs',
                array(
                    'model' => $model,
                    'attribute' => 'ev_pagina',
                    'id'=>'conteudo_edicao',
                )
             );
         ?>
<div class="row-fluid">
    <div class="span3">
        <?php echo $form->maskedTextFieldRow($model,'aHora','99:99',array('class'=>'span6','maxlength'=>5, 'append'=>'<i class="icon-time"></i>')); ?>
    </div>
    <div class="span3">
        <?php    echo $form->datepickerRow($model, 'aData',
            array('append'=>'<i class="icon-calendar"></i>' 
                    , 'options'=>array( 'format' => 'dd/mm/yyyy', 
                                        'weekStart'=> 0,
                                        'showButtonPanel' => true,
                                        'showAnim'=>'fold',
                                        'language'=>'pt',
                                        'monthNames'=>array(
                                            'Janeiro', 'Fevereiro','Março','Abril','Maio','Junho', 'Julho', 'Agosto','Setembro','Outubro','Novembro','Dezembro'
                                        )    )
            )
        );?>
    </div>
    
</div>


	<?php echo $form->textFieldRow($model,'ev_local',array('class'=>'span5','maxlength'=>256)); ?>

	<?php echo $form->textFieldRow($model,'ev_valor',array('class'=>'span2', 'append'=>'R$', 'id'=>'evValor')); ?>

	<?php echo $form->checkBoxRow($model,'ev_status',array('class'=>'span1')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Incluir' : 'Alterar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
