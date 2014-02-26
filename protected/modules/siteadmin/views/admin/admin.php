<?php

$this->menu=array(   
    array('label'=>'Novo Usuário','icon'=>'plus','url'=>array('create')),
);

?>

<h3>Gerenciamento de Usuários</h3>

<?php
$this->widget('bootstrap.widgets.TbTabs', array(
                'type'=>'tabs',
                'tabs'=>array(
                    array('label'=>'Ativos', 'content'=>
                        $this->widget('bootstrap.widgets.TbGridView',array(
                        'id'=>'admin-grid',
                        'dataProvider'=>$model->searchAtivo(),
                        'filter'=>$model,
                        'type' => 'striped bordered condensed',
                        'columns'=>array(
                            array('name'=>'adm_id', 'htmlOptions'=>array('style'=>'text-align:right; width:60px;')),
                            'adm_nome',
                            'adm_email',
                            array(
                                'class'=>'tcButtonColumn',
                                'header'=>Yii::t('ses', 'Gerenciar'),
                                'template'=>'{view}',
                                'url'=>'/siteadmin/admin/view/id',
                                'atributte'=>'adm_id',
                                'legenda'=>'icon-wrench',
                                'visible'=>'IndicaAguardaRetorno',
                            ),
                        ),
                        ), true),'active'=>true),

                    array('label'=>'Desligados', 'content'=>

                        $this->widget('bootstrap.widgets.TbGridView',array(
                        'id'=>'admindesligado-grid',
                        'dataProvider'=>$model->searchDesligado(),
                        'filter'=>$model,
                        'type' => 'striped bordered condensed',
                        'columns'=>array(
                                        array('name'=>'adm_id', 'htmlOptions'=>array('style'=>'text-align:right; width:60px;')),
                                        'adm_nome',
                                        'adm_email',
                                        array(
                                            'class'=>'tcButtonColumn',
                                            'header'=>Yii::t('ses', 'Gerenciar'),
                                            'template'=>'{view}',
                                            'url'=>'/siteadmin/admin/view/id',
                                            'atributte'=>'adm_id',
                                            'legenda'=>'icon-wrench',
                                            'visible'=>'IndicaAguardaRetorno',
                                        ),
                        ),
                        ), true))))); 
