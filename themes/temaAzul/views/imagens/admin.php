<script type="text/javascript">
    function abreDialog(obj){
        img = $(obj).find("img").attr("src");
        $("#dialogImg").attr({"src" : img});
        $("#Imagem").dialog("open");
        return false;
    }

</script>

<?php
$this->breadcrumbs=array(
	'Imagens'=>array('index'),
	'Manage',
);

?>

<h1>Administrar Imagens</h1>

</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'imagens-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
                array(
                    'header'=>'Imagem',
                    'type'=>'image',
                    'name'=>'im_imagem',
                    'htmlOptions'=>array(
                        'style'=>'width:150px !important; display:block',
                        'onclick'=>'abreDialog(this);',
                        'class'=>'cursor-pointer',
                    )
                ),
		'im_tipo',
                'im_titulo',
//		'im_descricao',
                array(
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    'template' => '{update} {delete}',   
                ),
),
)); ?>

<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
'id'=>'Imagem',
// additional javascript options for the dialog plugin
'options'=>array(
    'title'=>'Imagem',
    'autoOpen'=>false,
    'width'=>'80%',
    'buttons' => array(
        array('text'=>'Fechar','click'=> 'js:function(){$(this).dialog("close");}'),
    ),
),
));
echo '<div id="mostraImg" class="text-center">';
echo CHtml::Image('', '', array('id'=>'dialogImg')); 
echo '</div>';
$this->endWidget();

?>
