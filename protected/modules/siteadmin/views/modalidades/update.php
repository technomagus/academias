<?php 
$this->menu=array(
    array('label'=>'Voltar','icon'=>'arrow-left','url'=>array('view','id'=>$model->MODALIDADE_ID)),
);
?>

	<h3>Atualizar Modalidade <?php echo $model->MODALIDADE_ID; ?></h3>
<?php
$this->widget('bootstrap.widgets.TbTabs', array(
                'type'=>'tabs',
                'tabs'=>array(
                    array('label'=>'Ativos', 'content'=>
 $this->renderPartial('_form', array('model'=>$model),true)
, 'active'=>true))
        )
    );