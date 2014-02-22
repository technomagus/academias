

<section class="cols">
    <?php foreach($dataProvider as $data)
{  ?>
        <div class="col" style="border: black 1px solid;">
            <?php echo CHtml::link(CHtml::image($data->MOD_IMAGE, $data->MOD_TITULO, array('title'=>$data->MOD_TITULO,'width'=>'80px', 'class'=>'modInicial', 'style'=>'border-radius: 1em;')), Yii::app()->createUrl('/modalidades/ver', array('id'=>$data->MODALIDADE_ID))); ?>
            <div class="col-cnt">
                <h2><?php echo $data->MOD_TITULO;?></h2>
                    <p>Descrição ...<?php echo $data->MOD_DESCRICAO; ?></p>
                    <a href="#" class="more">Saiba mais</a>
            </div>
        </div>
<?php } ?>
    <div class="cl">&nbsp;</div>
</section>