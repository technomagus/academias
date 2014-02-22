<h2 class="page-header text-center text-info">Cadastro de Fotos</h2>

<?php 
$this->menu=array(
    array('label'=>'<i class="icon-home"></i>Páginá Inicial Administrativa','url'=>array('/site/admin')),
    '',
    array('label'=>'<i class="icon-picture"></i>Administrar Imagens','url'=>array('admin')),
    array('label'=>'Ver Imagens','url'=>array('view','id'=>$data->nGetId())),
    '',
    array('label'=>'<i class="icon-off"></i>Sair', 'url'=>array('/site/logout'))
);
        
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
echo CHtml::button('Mais Fotos', array('id'=>'btnMais', 'class'=>'btn btn-primary'));

echo '<div class="form-actions">';
echo CHtml::submitButton('Enviar', array('class'=>'btn btn-primary'));
echo '</div>';
$this->endWidget();

$script = '
    var linha = $("#linha").html();
    $("#btnMais").click(function(){
        $(linha).appendTo( $("#linha") );
    });';

Yii::app()->clientScript->registerScript('addLinha', $script, CClientScript::POS_READY);
?>
