<?php
$i=0;
foreach($dataProvider as $data){
    $img[$i]['image'] = $data->aGetImgLink(); 
    $img[$i]['caption'] = $data->aGetDescricao(); 
    $img[$i]['label'] = $data->aGetTitulo(); 
    $i++;
}

echo '<div class="clearfix"></div>';
echo '<br/>';
echo '<div class="">';
$this->beginWidget('bootstrap.widgets.TbCarousel', array(
   'items'=>$img));
$this->endWidget();
echo '</div>';
?>