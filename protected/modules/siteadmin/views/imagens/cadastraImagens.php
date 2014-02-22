<h3>Cadastrar Imagens</h3>

<?php 
$this->menu=array(
    array('label'=>'Voltar','icon'=>'arrow-left','url'=>array('verImagens', 'id'=>$data->nGetId(), 'tipo'=>$data->aGetTipo())),
);
$this->widget('bootstrap.widgets.TbTabs', array(
                'type'=>'tabs',
                'tabs'=>array(
                    array('label'=>'Cadastro', 'content'=>
                        CController::renderPartial('_cadastro', array(
                            'model'=>$model
                        ), true),
                'active'=>true))
));
?>

