<h1 class="copperplate text-center text-azul">EVENTOS</h1>
<?php 
$i=0;
foreach($dataProvider as $data){ 
    $styleBg = null;
   if($i%2){
       $styleBg = '';
   } 
    
    ?>
<div class="row-fluid" style="border:1px solid #999;">
    <div class="row-fluid" style=" background:#00cc; border-bottom:1px solid #999">
        <div class="span3 evData text-branco text-center font18 modalidades">
            <?php echo $data->aData . ' ' . $data->aHora ; ?>
        </div>
        <div class="span7 evTexto text-branco text-center modalidades">
            <?php echo $data->ev_titulo; ?>
        </div>
    </div>
    <div class="row-fluid" style="padding-left:20px;">
        <?php echo $data->ev_descricao;?>
        
        <br/>
        <?php echo CHtml::link('Saíba Mais', Yii::app()->createUrl('/eventos/ver', array('id'=>$data->ev_id))); ?>
    </div>
</div>
<?php 

$i++;
}

?>