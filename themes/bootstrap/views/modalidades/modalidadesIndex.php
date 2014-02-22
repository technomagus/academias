<div class="row-fluid text-justify">

<?php

foreach($dataProvider as $data)
{
    echo '<div class="span4 modalidades">';
    echo CHtml::link(CHtml::image($data->MOD_IMAGE, $data->MOD_TITULO, array('title'=>$data->MOD_TITULO, 'class'=>'modInicial')), Yii::app()->createUrl('/modalidades/ver', array('id'=>$data->MODALIDADE_ID)));
    echo '<div class="clearfix"></div>';
    echo '<div class="text-center modTituloInicial">'. CHtml::link($data->MOD_TITULO, Yii::app()->createUrl('/modalidades/ver', array('id'=>$data->MODALIDADE_ID))).'</div>';
    echo '<span class="text-justify modDescricaoInicial">'. $data->aGetModalidadeDescPeq(128) . '</span>';
    echo '</div>';
}
?>
</div>
