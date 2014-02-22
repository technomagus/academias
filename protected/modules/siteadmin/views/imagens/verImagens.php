<script type="text/javascript">
    function abreDialog(obj){
        img = $(obj).find("img").attr("src");
        $("#dialogImg").attr({"src" : img});
        $("#Imagem").dialog("open");
        return false;
    }

</script>
<?php
    $this->menu=array(
	array('label'=>'Voltar','icon'=>'arrow-left','url'=>array($tipo.'/view','id'=>$id)),
	array('label'=>'Nova Imagem ','icon'=>'plus','url'=>array('cadastraImagens', 'id'=>$id, 'tipo'=>$tipo)),
    );
?>

<h3>Administrar Imagens</h3>

<?php 
$this->widget('bootstrap.widgets.TbTabs', array(
                'type'=>'tabs',
                'tabs'=>array(
                    array('label'=>'Imagens', 'active'=>'true', 'content'=>
                        $this->widget('bootstrap.widgets.TbGridView',array(
                        'id'=>'imagens-grid',
                        'type' => 'striped bordered condensed', 
                        'dataProvider'=>$model->adminAlbum($id, $tipo),
                        'filter'=>$model,
                        'columns'=>array(
                                        array(
                                            'header'=>'Imagem',
                                            'type'=>'image',
                                            'filter'=>false,
                                            'name'=>'im_imagem',
                                            'value'=>'$data->im_imagem',
                                            'htmlOptions'=>array(
                                                'style'=>'width:150px !important; max-height:125px; overflow:hidden; display:inline-block;',
                                                'onclick'=>'abreDialog(this);',
                                                'class'=>'cursor-pointer',
                                            ),
                                            'headerHtmlOptions'=>array(
                                                'style'=>'width:150px !important;'
                                            )
                                        ),
                                        array(
                                            'name'=>'im_tipo',
                                            'htmlOptions'=>array(
                                                'style'=>'width:150px !important',
                                            )
                                        ),
                                        'im_titulo',
                                        'im_descricao',
                                        array(
                                            'class'=>'bootstrap.widgets.TbButtonColumn',
                                            'template' => '{update} {delete}',   
                                        ),
                        )), true)
                    )
                )
        ));


?>

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
