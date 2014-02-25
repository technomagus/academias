<?php
$this->menu=array(
array('label'=>'Voltar','icon'=>'arrow-left','url'=>array('admin')),
);
?>

<h3>Atualizar Video</h3>

<?php
$this->widget('bootstrap.widgets.TbTabs', array(
                'type'=>'tabs',
                'tabs'=>array(
                    array('label'=>'Cadastro', 'content'=>
 $this->renderPartial('_form', array('model'=>$model),true)
, 'active'=>true))
        )
    ); 