
<?php

Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/myCarousel_skin.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery.jcarousel.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/myCarousel.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile("https://labnol.googlecode.com/files/youtube.js", CClientScript::POS_HEAD);

?>
<script type="text/javascript">
//    function abreDialog(obj){
//        img = $(obj).attr("src");
//        titulo = $(obj).attr("data-titulo");
//        descricao = $(obj).attr("data-descricao");
//        $("#dialogImg").attr({"src" : img});
//        $("#dialogTitulo").html(titulo);
//        $("#dialogDescricao").html(descricao);
//        $("#Imagem").dialog("open");
//        return false;
    }

</script>

        
<div class="row-fluid">
    
<?php 
    echo '<div id="scrollprodutos" class="row-fluid">';
    echo '<ul id="mycarousel" class"jcarousel-skin-tango row-fluid">';
    foreach($dataProvider as $data){
        echo '<li style="overflow:hidden; max-height:170px"> <div class="youtube" id="'.$data->clink.'" style="width: 320px; height: 180px; box-shadow: 0 0 5px black; border: solid 3px #2D5900"></div> </li>';
    }
    echo '</ul>';
    echo '</div>';
?>
</div>
<?php
//$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
//'id'=>'Imagem',
//// additional javascript options for the dialog plugin
//'options'=>array(
//    'title'=>'Imagem',
//    'modal'=>true,
//    'autoOpen'=>false,
//    'width'=>'80%',
//    'buttons' => array(
//        array('text'=>'Fechar','click'=> 'js:function(){$(this).dialog("close");}'),
//    ),
//),
//));
//echo '<div id="mostraImg" class="text-center">';
//echo CHtml::Image('', '', array('id'=>'dialogImg')); 
//echo '<h3 id="dialogTitulo" ></h3>';
//echo '<div id="dialogDescricao" style="font-weight:bold"></div>';
//echo '</div>';
//$this->endWidget();

?>