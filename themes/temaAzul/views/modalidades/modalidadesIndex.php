<div class="row-fluid text-justify">

<?php
$aberto = 0;
$fechado = 0;
$i=0;
foreach($dataProvider as $data)
{
    if(!($i%2)){
        if($i != 0){
            echo '</div>';
            $fechado ++;
        }
        echo '<div class="row-fluid">';
        $aberto++;
    }
    echo '<div class="span6 modalidades">';
        echo '<h3 class="oswald">'.$data->MOD_TITULO.'</h3>';
            echo '<div class="row-fluid">';
            echo '<div class="span4">';
            echo CHtml::link(CHtml::image($data->MOD_IMAGE, $data->MOD_TITULO, array('title'=>$data->MOD_TITULO, 'class'=>'modInicial')), Yii::app()->createUrl('/modalidades/ver', array('id'=>$data->MODALIDADE_ID)));
            echo '</div>';
            echo '<div class="span8 text-justify modDescricaoInicial">';
                  echo   $data->aGetModalidadeDescPeq(128);
            echo '</div>';
        echo '</div>';
    echo '</div>';
    $i++;
}
if($aberto != $fechado){
    echo '</div>';
}
?>
</div>
