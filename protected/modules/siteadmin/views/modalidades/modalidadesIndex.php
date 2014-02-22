<div class="row-fluid text-justify" style="line-height: 30px;">

<?php

foreach($dataProvider as $data)
{
    echo '<div class="span4">';
    echo CHtml::link(CHtml::image($data->MOD_IMAGE, '$data->MOD_TITULO'), Yii::app()->createUrl('/modalidades/ver', array('id'=>$data->MODALIDADE_ID)));
    echo '<div class="clearfix"></div>';
    echo '<span class="modalidades">'. $data->MOD_TITULO . '</span>';
    echo '</div>';
}
?>
</div>