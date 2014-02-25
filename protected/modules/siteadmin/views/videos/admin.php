<?php
$this->menu=array(
    array('label'=>'Novo Video','icon'=>'plus','url'=>array('create')),
);
?>
<h3>Gerenciamento de Videos</h3>

<?php 

$this->widget('bootstrap.widgets.TbTabs', array(
                'type'=>'tabs',
                'tabs'=>array(
                    array('label'=>'Ativos', 'active'=>true, 'content'=>

                
                    $this->widget('bootstrap.widgets.TbGridView',array(
                        'id'=>'videos-grid',
                        'type' => 'striped bordered condensed',
                        'dataProvider'=>$model->search(),
                        'columns'=>array(
                            'Titulo',
                            'Descricao',
                            array('class'=>'tcButtonColumn', 'header'=>Yii::t('ses', 'Gerenciar'), 'template'=>'{view}', 'url'=>'/siteadmin/videos/view/id', 'atributte'=>'nnumevid', 'legenda'=>'icon-wrench', 'visible'=>'IndicaAguardaRetorno'),
                        ),
                    ), true)
                        )
                    )
    )
        );

?>
