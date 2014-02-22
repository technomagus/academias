<?php
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'imagens-form',
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array(
            'enctype'=>'multipart/form-data',
        )
));
?>
<div id="linha">
    <div class="row-fluid">    
    <?php
    echo $form->fileFieldRow($model, 'im_imagem', array('name'=>'Imagens[im_imagem][]'));
    echo $form->textFieldRow($model, 'im_titulo', array('name'=>'Imagens[im_titulo][]', 'class'=>'span7'));
    echo $form->textFieldRow($model, 'im_descricao', array('name'=>'Imagens[im_descricao][]', 'class'=>'span7'));
    echo '<hr/>';
    ?>
    </div>
</div>

<?php
//echo CHtml::button('Mais Fotos', array('id'=>'btnMais', 'class'=>'btn btn-primary'));

echo '<div class="form-actions">';
echo '<div class="span1">';
echo CHtml::submitButton('Enviar', array('class'=>'btn btn-primary'));
echo '</div>';
echo '<div class="span1">';
echo CHtml::button('Mais Fotos', array('id'=>'btnMais', 'class'=>'btn btn-primary',));
echo '</div>';
echo '</div>';
$this->endWidget();

$script = '
    var linha = $("#linha").html();
    $("#btnMais").click(function(){
        $(linha).appendTo( $("#linha") );
    });';

Yii::app()->clientScript->registerScript('addLinha', $script, CClientScript::POS_READY);
?>