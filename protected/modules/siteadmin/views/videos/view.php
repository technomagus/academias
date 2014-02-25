
<?php
$this->menu=array(
    array('label'=>'Voltar','icon'=>'arrow-left','url'=>array('admin')),
    array('label'=>'Atualizar Video','icon'=>'pencil','url'=>array('update','id'=>$model->nnumevid)),
    array('label'=>'Excluir Video','icon'=>'trash', 'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->nnumevid),'confirm'=>'Deseja realmente excluir este Video?')),
);
?>

<h1>Video <?php echo $model->nnumevid; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'nnumevid',
		'clink',
                'Titulo',
                'Descricao',
),
)); ?>

<div class="youtube" id="<?php echo $model->clink; ?>" style="width: 320px; height: 180px; box-shadow: 0 0 5px black;"></div>
        <script src="https://labnol.googlecode.com/files/youtube.js"></script>
    </div>
