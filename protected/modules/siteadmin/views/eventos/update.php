<?php
    $this->menu=array(
	array('label'=>'Voltar','icon'=>'arrow-left','url'=>array('view','id'=>$model->ev_id)),
    );
	?>

	<h1>Atualizar Evento <?php echo $model->ev_id; ?></h1>

<?php
$this->widget('bootstrap.widgets.TbTabs', array(
                'type'=>'tabs',
                'tabs'=>array(
                    array('label'=>'Atualizar', 'content'=>
 $this->renderPartial('_form', array('model'=>$model),true)
, 'active'=>true))
        )
    );