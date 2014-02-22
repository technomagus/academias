<?php
$this->menu=array(
    array('label'=>'Novo Evento','icon'=>'plus','url'=>array('create')),
);
?>
<h3>Gerenciamento de Eventos</h3>

<?php 

$this->widget('bootstrap.widgets.TbTabs', array(
                'type'=>'tabs',
                'tabs'=>array(
                    array('label'=>'Ativos', 'active'=>true, 'content'=>

                $this->widget('bootstrap.widgets.TbGridView',array(
                'id'=>'eventos-grid',
                'type' => 'striped bordered condensed',
                'dataProvider'=>$model->searchAtivos(),
                'filter'=>$model,
                'columns'=>
                    array(
                        array('name'=>'ev_id', 'htmlOptions'=>array('style'=>'text-align:right; width:60px;')),
                        'ev_titulo',
                        'ev_local',
                        array('class'=>'tcButtonColumn', 'header'=>Yii::t('ses', 'Gerenciar'), 'template'=>'{view}', 'url'=>'/siteadmin/eventos/view/id', 'atributte'=>'ev_id', 'legenda'=>'icon-wrench', 'visible'=>'IndicaAguardaRetorno'),
                    ),
                ), true)),
                array('label'=>'Desligados', 'content'=>

                $this->widget('bootstrap.widgets.TbGridView',array(
                'id'=>'eventosdesligados-grid',
                'type' => 'striped bordered condensed',
                'dataProvider'=>$model->searchInativos(),
                'filter'=>$model,
                'columns'=>
                    array(
                        array('name'=>'ev_id', 'htmlOptions'=>array('style'=>'text-align:right; width:60px;')),
                        'ev_titulo',
                        'ev_local',
                        array('class'=>'tcButtonColumn', 'header'=>Yii::t('ses', 'Gerenciar'), 'template'=>'{view}', 'url'=>'/siteadmin/eventos/view/id', 'atributte'=>'ev_id', 'legenda'=>'icon-wrench', 'visible'=>'IndicaAguardaRetorno'),
                    ),
                ), true)))));

?>
