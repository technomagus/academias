<?php
$this->breadcrumbs=array(
	'Modalidades'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'Nova Modalidade','icon'=>'plus','url'=>array('create')),
);
?>

<h3>Administrar Modalidades</h3>


<?php
$this->widget('bootstrap.widgets.TbTabs', array(
                'type'=>'tabs',
                'tabs'=>array(
                    array('label'=>'Ativos', 'active'=>true, 'content'=>
                        $this->widget('bootstrap.widgets.TbGridView',array(
                        'id'=>'modalidades-grid',
                        'type' => 'striped bordered condensed',
                        'dataProvider'=>$model->searchAtivos(),
                        'filter'=>$model,
                        'columns'=>array(
                            array('name'=>'MODALIDADE_ID', 'htmlOptions'=>array('style'=>'text-align:right; width:60px;')),
                            'MOD_TITULO',
                            array(
                                'class'=>'tcButtonColumn',
                                'header'=>Yii::t('ses', 'Gerenciar'),
                                'template'=>'{view}',
                                'url'=>'/siteadmin/modalidades/view/id',
                                'atributte'=>'MODALIDADE_ID',
                                'legenda'=>'icon-wrench',
                                'visible'=>'IndicaAguardaRetorno',
                            ),
                        ),
                        ), true)),
                        array('label'=>'Desligados', 'content'=>
                        $this->widget('bootstrap.widgets.TbGridView',array(
                        'id'=>'modalidadesdesligados-grid',
                        'type' => 'striped bordered condensed',
                        'dataProvider'=>$model->searchInativos(),
                        'filter'=>$model,
                        'columns'=>array(
                            array('name'=>'MODALIDADE_ID', 'htmlOptions'=>array('style'=>'text-align:right; width:60px;')),
                            'MOD_TITULO',
                            array(
                                'class'=>'tcButtonColumn',
                                'header'=>Yii::t('ses', 'Gerenciar'),
                                'template'=>'{view}',
                                'url'=>'/siteadmin/modalidades/view/id',
                                'atributte'=>'MODALIDADE_ID',
                                'legenda'=>'icon-wrench',
                                'visible'=>'IndicaAguardaRetorno',
                            ),
                        )), true))))); ?>
