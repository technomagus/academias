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
    array('label'=>'Nova Imagem','icon'=>'plus','url'=>array('create')),
);
?>

<h3>Administrar Sliders</h3>

<?php 
$this->widget('bootstrap.widgets.TbTabs', array(
                'type'=>'tabs',
                'tabs'=>array(
                    array('label'=>'Ativos', 'active'=>true, 'content'=>
                        $this->widget('bootstrap.widgets.TbGridView',array(
                            'id'=>'slider-grid',
                            'type' => 'striped bordered condensed',
                            'dataProvider'=>$model->searchAtivos(),
                            //'filter'=>$model,
                            'columns'=>
                                array(
                                    array('header'=>'Imagem', 'type'=>'image', 'name'=>'sl_img', 'value'=>'$data->aGetImgLink()', 'htmlOptions'=>array('style'=>'width:150px !important;display:inline-block;', 'onclick'=>'abreDialog(this);', 'class'=>'cursor-pointer', ),'headerHtmlOptions'=>array('style'=>'width:150px !important;')),
                                    array('name'=>'sl_id', 'htmlOptions'=>array('style'=>'text-align:right; width:60px;')),
                                    'sl_titulo',
                                    array('header'=>'Data da Criação', 'name'=>'sl_dtcriacao'),
                                    array('class'=>'tcButtonColumn', 'header'=>Yii::t('ses', 'Gerenciar'), 'template'=>'{view}', 'url'=>'/siteadmin/slider/view/id', 'atributte'=>'sl_id', 'legenda'=>'icon-wrench', 'visible'=>'IndicaAguardaRetorno', ),
                                ),
                            ), true)),
                    array('label'=>'Desligados', 'content'=>
                        $this->widget('bootstrap.widgets.TbGridView',array(
                            'id'=>'sliderdesligados-grid',
                            'type' => 'striped bordered condensed',
                            'dataProvider'=>$model->searchInativos(),
                            //'filter'=>$model,
                            'columns'=>
                                array(
                                    array('header'=>'Imagem', 'type'=>'image', 'name'=>'sl_img', 'value'=>'$data->aGetImgLink()', 'htmlOptions'=>array('style'=>'width:150px !important;display:inline-block;', 'onclick'=>'abreDialog(this);', 'class'=>'cursor-pointer', ),'headerHtmlOptions'=>array('style'=>'width:150px !important;')),
                                    array('name'=>'sl_id', 'htmlOptions'=>array('style'=>'text-align:right; width:60px;')),
                                    'sl_titulo',
                                    array('header'=>'Data da Criação', 'name'=>'sl_dtcriacao'),
                                    array('class'=>'tcButtonColumn', 'header'=>Yii::t('ses', 'Gerenciar'), 'template'=>'{view}', 'url'=>'/siteadmin/slider/view/id', 'atributte'=>'sl_id', 'legenda'=>'icon-wrench', 'visible'=>'IndicaAguardaRetorno', ),
                                ),
                    ), true)))));
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
echo '<div id="mostraImg">';
echo CHtml::Image('', '', array('id'=>'dialogImg')); 
echo '</div>';
$this->endWidget();

?>