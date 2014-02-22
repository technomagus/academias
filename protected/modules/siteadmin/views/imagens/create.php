<?php
$this->menu=array(
    array('label'=>'Voltar','icon'=>'arrow-left','url'=>array('verImagens', 'id'=>$model->nGetIdEStran(), 'tipo'=>$model->aGetTipo())),
    array('label'=>'Excluir Imagem',  'icon'=>'trash', 'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->im_id),'confirm'=>'Deseja realmente excluir este item?')),
);

	$this->menu=array(
                array('label'=>'<i class="icon-home"></i>Páginá Inicial Administrativa','url'=>array('/site/admin')),
                '',
                array('label'=>'<i class="icon-picture"></i>Administrar Imagens','url'=>array('admin')),
                '',
                array('label'=>'<i class="icon-off"></i>Sair', 'url'=>array('/site/logout'))
	);
?>

<h1>Create Imagens</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>