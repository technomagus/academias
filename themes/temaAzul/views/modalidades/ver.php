<div class="row-fluid">
    <h2 class="text-cinza text-center page-header"><?php echo $model->MOD_TITULO; ?></h2>
</div>
<div class="row-fluid">
    <?php echo CHtml::image($model->MOD_IMAGE, $model->MOD_TITULO, array('class'=>'pull-left', 'style'=>'margin-right:15px;')) . $model->MOD_DESCRICAO; ?>
</div>
<div class="clearfix"></div>
<?php

if($model->hasImagens()){
    $this->renderPartial('_fotos', array(
        'dataProvider'=>$model->aGetImagens()
    ));
}

?>

<div class="row-fluid">
<?php if(!empty($model->MOD_HORARIOxTURNOxPRECO)){
    $model->aGetTurnos();
?>
    <div class="span6">
        <h2 class="text-cinza text-center page-header">Turnos, Horários e Valores</h2>
        <?php foreach($model->MOD_HORARIOxTURNOxPRECO as $turno){ ?>
        <div class="row-fluid">
            <b>Turno:</b> <?php echo $turno[0] ;?> <br/>
            <b>Horario:</b> <?php echo $turno[1] ;?><br/>
            <b>Valor <span class="text-error">R$<?php echo $turno[2] ;?></span></b> 
        </div>
        <br/>
        <div class="clearfix"></div>
        <?php } ?>
    </div>
    <?php } ?>
    <div class="span6">
        <h2 class="text-cinza text-center page-header">Saíba Mais</h2>
        <div class="row-fluid">
            <b>Endereço: </b> <?php echo Yii::app()->params['endereco'];?> <br/>
            <b>Cidade: </b><?php echo Yii::app()->params['cidade']. '-' .Yii::app()->params['uf'];?> <br/>
            <b>Telefone: </b> <?php echo Yii::app()->params['telefone'];?> <br/>
            <b>E-mail: </b> <?php echo Yii::app()->params['email'];?> <br/>
        </div>
    </div>
</div>