<div class="row-fluid">
    <h2 class="text-azul text-center page-header"><?php echo $model->ev_titulo; ?></h2>
</div>
<div class="row-fluid">
    <?php echo $model->ev_pagina; ?>
</div>
<div class="clearfix"></div>
<?php

if($model->hasImagens()){
    $this->renderPartial('_fotos', array(
        'dataProvider'=>$model->aGetImagens()
    ));
}

?>