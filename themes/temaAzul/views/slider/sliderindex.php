<?php
$i=0;
foreach($dataProvider as $data){
    $img[$i]['image'] = $data->aGetImgLink(); 
    $img[$i]['label'] = $data->aGetDescricao(); 
    $img[$i]['caption'] = $data->aGetTitulo(); 
    $i++;
}

echo '<div class="clearfix"></div>';
echo '<br/>';
echo '<div style="border:5px solid black">';
$this->beginWidget('bootstrap.widgets.TbCarousel', array(
   'items'=>$img));
$this->endWidget();
echo '</div>';
?>