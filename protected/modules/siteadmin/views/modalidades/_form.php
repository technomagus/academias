<?php
Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl.'/js/jquery/jquery.price_formate.min.js') ;


Yii::app()->clientScript->registerScript('preco_format','
      $(".modValor").priceFormat({
                         prefix: "R$ ",
                         centsSeparator: ",",
                         thousandsSeparator: "."
      });
');
?>


<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'modalidades-form',
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array(
            'enctype'=>'multipart/form-data',
        )
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'MOD_TITULO',array('class'=>'span5','maxlength'=>40)); ?>

<?php 
if (!$model->isNewRecord){
    if($model->aGetTurnos()){
        foreach($model->MOD_HORARIOxTURNOxPRECO as $turno){
            echo '<div class="row-fluid">';
            echo '<div class="span6">';
            echo $form->textFieldRow($model,'aTurno',array('class'=>'span12','maxlength'=>40, 'name'=>'aTurno[]', 'value'=>$turno[0]));
            echo '</div>';
            echo '<div class="span2">';
            echo $form->textFieldRow($model,'aHorario',array('class'=>'span12','maxlength'=>40, 'name'=>'aHorario[]', 'value'=>$turno[1]));
            echo '</div>';
            echo '<div class="span2">';
            echo $form->textFieldRow($model,'aValor',array('class'=>'span12 modValor','maxlength'=>40, 'name'=>'aValor[]', 'value'=>$turno[2]));
            echo '</div>';
            echo '</div>';
        }
    }
}
?>
<div id="linha">
    <div class="row-fluid">
        <div class="span6">
            <?php echo $form->textFieldRow($model,'aTurno',array('class'=>'span12','maxlength'=>40, 'name'=>'aTurno[]')); ?>
        </div>
        <div class="span2">
            <?php echo $form->textFieldRow($model,'aHorario',array('class'=>'span12','maxlength'=>40, 'name'=>'aHorario[]')); ?>
        </div>
        <div class="span2">
            <?php echo $form->textFieldRow($model,'aValor',array('class'=>'span12 modValor','maxlength'=>40, 'name'=>'aValor[]')); ?>
        </div>
    </div>
</div>

        <div class="clearfix">
            <?php echo CHtml::button('Adicionar Turno',array('class'=>'btn btn-primary', 'id'=>'btnMais')); ?>
        </div>
<br/>
	<?php echo $form->html5EditorRow($model,'MOD_DESCRICAO',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->fileFieldRow($model,'MOD_IMAGE',array('class'=>'span5')); ?>

	<?php // echo $form->textAreaRow($model,'MOD_HORARIOxTURNOxPRECO',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->checkBoxRow($model,'MOD_STATUS',array('class'=>'span1')); ?>
	<?php echo CHtml::hiddenField('n',1,array('class'=>'span1', 'value'=>1)); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'CADASTRAR' : 'SALVAR',
		)); ?>
</div>

<?php $this->endWidget(); ?>
<?php 

$script = '
    var linha = $("#linha").html();
    $("#btnMais").click(function(){
        $("#linha").append(linha);
    });';

Yii::app()->clientScript->registerScript('addCampo', $script, CClientScript::POS_READY);

?>