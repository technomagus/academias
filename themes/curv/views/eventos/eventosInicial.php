<h1 class="copperplate text-center text-cinza">EVENTOS</h1>
<?php 
$i=0;
foreach($dataProvider as $data){ 
    $styleBg = null;
   if($i%2){
       $styleBg = 'background:#eee;';
   } 
    
    ?>
<div class="row-fluid" style="<?php echo $styleBg;?> border:1px solid #999;">
    <div class="span3 evData text-cinza text-center font18 modalidades">
        <?php echo $data->aData . ' ' . $data->aHora ; ?>
    </div>
    <div class="span9 evTexto text-cinza text-justify modalidades">
        <?php echo $data->ev_descricao; ?>
    </div>
</div>
<?php 

$i++;
}

?>