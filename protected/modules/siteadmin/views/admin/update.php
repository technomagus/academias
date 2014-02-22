<?php
    $this->menu=array(
	array('label'=>'Voltar','icon'=>'arrow-left','url'=>array('view','id'=>$model->adm_id)),
    );
    ?>

	<h3>Atualizar Admin <?php echo $model->adm_nome; ?></h3>

<?php
$this->widget('bootstrap.widgets.TbTabs', array(
                'type'=>'tabs',
                'tabs'=>array(
                    array('label'=>'Atualizar', 'content'=>
 $this->renderPartial('_form', array('model'=>$model),true)
, 'active'=>true))
        )
    );