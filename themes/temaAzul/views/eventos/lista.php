<h1 class="copperplate text-center text-cinza">EVENTOS</h1>
<?php 
$i=0;
foreach($dataProvider as $data){ 
    $styleBg = null;
   if($i%2){
       $styleBg = '';
   } 
    
    ?>
<div class="row-fluid" style="border:1px solid #999;">
    <div class="row-fluid" style=" background:#eee; border-bottom:1px solid #999; min-height: 30px; line-height: 30px;">
        <div class="span3 evData text-cinza text-center font18 modalidades">
            <?php echo $data->aData . ' ' . $data->aHora ; ?>
        </div>
        <div class="span7 evTexto text-cinza text-center modalidades">
            <?php echo $data->ev_titulo; ?>
        </div>
    </div>
    <div class="row" style="padding-left:20px; margin: 10px 0;">
        <?php echo $data->aGetDescPeq(512);?>
        
        <br/>
        <br/>
        <?php echo CHtml::link('Saíba Mais', Yii::app()->createUrl('/eventos/ver', array('id'=>$data->ev_id))); ?>
    </div>
</div>
<?php 

$i++;
}

?>
<br/>