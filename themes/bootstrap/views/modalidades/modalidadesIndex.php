

<div class="clearfix"></div>
<div class="row-fluid">
    <div class="span12">
<?php 

Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/myCarousel_skin2.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery.jcarousel.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/myCarousel2.js', CClientScript::POS_HEAD);

//    foreach($dataProvider as $data){
//        echo '<li class="span4" style="background:none !important"><div class="youtube" id="'.$data->clink.'" style="width:100%; height: 180px; box-shadow: 0 0 5px black; border: solid 3px #2D5900">';
//        echo '<script src="https://labnol.googlecode.com/files/youtube.js"></script></div></li>';
//    }
//    echo '</ul>';
//    echo '</div>';
?>

    
    
    
<?php
echo '<div id="scrollprodutos">';
echo '<ul id="mycarousel" class="jcarousel-skin-tango">';

foreach($dataProvider as $data)
{
    echo '<li>';
    echo CHtml::link(CHtml::image($data->MOD_IMAGE, $data->MOD_TITULO, array('title'=>$data->MOD_TITULO, 'class'=>'modInicial')), Yii::app()->createUrl('/modalidades/ver', array('id'=>$data->MODALIDADE_ID)));
//    echo '<div class="clearfix"></div>';
    echo '<div class="text-center modTituloInicial">'. CHtml::link($data->MOD_TITULO, Yii::app()->createUrl('/modalidades/ver', array('id'=>$data->MODALIDADE_ID))).'</div>';
    echo '<div class="text-justify modDescricaoInicial">'. $data->aGetModalidadeDescPeq(128) . '</div>';
    echo '</li>';
}
    echo '</ul>';
    echo '</div>';
?>
</div>
</div>
