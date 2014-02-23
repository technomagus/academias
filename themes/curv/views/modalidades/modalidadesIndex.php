

<section class="cols">
    <?php foreach($dataProvider as $data)
{  ?>
        <div class="col">
            <?php echo CHtml::link(CHtml::image($data->MOD_IMAGE, $data->MOD_TITULO, array('title'=>$data->MOD_TITULO,'width'=>'80px', 'class'=>'modInicial', 'style'=>'border-radius: 360em;')), Yii::app()->createUrl('/modalidades/ver', array('id'=>$data->MODALIDADE_ID))); ?>
            <div class="col-cnt">
                <h2><?php echo $data->MOD_TITULO;?></h2>
                    <p><?php echo $data->aGetModalidadeDescPeq(100); ?></p>
                    <a href="#" class="more">Saiba mais</a>
            </div>
        </div>
<?php } ?>
    <div class="cl">&nbsp;</div>
</section>