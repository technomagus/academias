<?php

$this->menu=array(   
    array('label'=>'Novo Cliente','icon'=>'plus','url'=>array('create')),
);

?>

<h2>Gerenciamento de Clientes</h2>

<?php

$this->widget('bootstrap.widgets.TbTabs', array(
                'type'=>'tabs',
                'tabs'=>array(
                    array('label'=>'Ativos', 'content'=>

         $this->widget('bootstrap.widgets.TbGridView',array(
                        'id'=>'cliente-grid',
                        'dataProvider'=>$model->searchAtivo(),
                        'filter'=>$model,
                                'type' => 'striped bordered condensed',
            'columns'=>array(
                array('name'=>'CLIENTE_ID', 'htmlOptions'=>array('style'=>'text-align:right; width:60px;')),
                array('name'=>'CLI_NOME', 'htmlOptions'=>array('style'=>'text-align:center;')),
                array('name'=>'CLI_DATANASCIMENTO','filter'=>false, 'htmlOptions'=>array('style'=>'text-align:center;')),
                array('name'=>'CLI_DATAMATRICULA','filter'=>false, 'htmlOptions'=>array('style'=>'text-align:center;')),
                array('name'=>'CLI_FONE','filter'=>false, 'htmlOptions'=>array('style'=>'text-align:center;')),
                array('name'=>'CLI_CELULAR','filter'=>false, 'htmlOptions'=>array('style'=>'text-align:center;')),
		/*
		'CLI_FOTO',
		*/
                array(
                    'class'=>'tcButtonColumn',
                    'header'=>Yii::t('ses', 'Gerenciar'),
                    'template'=>'{view}',
                    'url'=>'/siteadmin/cliente/view/id',
                    'atributte'=>'CLIENTE_ID',
                    'legenda'=>'icon-wrench',
                    'visible'=>'IndicaAguardaRetorno',
                ),
            ),
        ), true), 'active'=>true), 
                    
                    array('label'=>'Desligados', 'content'=>

         $this->widget('bootstrap.widgets.TbGridView',array(
        'id'=>'clientedesligado-grid',
        'dataProvider'=>$model->searchDesligado(),
        'filter'=>$model,
        'type' => 'striped bordered condensed',
        'columns'=>array(
                array('name'=>'CLIENTE_ID', 'htmlOptions'=>array('style'=>'text-align:right; width:60px;')),
                array('name'=>'CLI_NOME', 'htmlOptions'=>array('style'=>'text-align:center;')),
                array('name'=>'CLI_DATANASCIMENTO','filter'=>false, 'htmlOptions'=>array('style'=>'text-align:center;')),
                array('name'=>'CLI_DATAMATRICULA','filter'=>false, 'htmlOptions'=>array('style'=>'text-align:center;')),
                array('name'=>'CLI_FONE','filter'=>false, 'htmlOptions'=>array('style'=>'text-align:center;')),
                array('name'=>'CLI_CELULAR','filter'=>false, 'htmlOptions'=>array('style'=>'text-align:center;')),
		/*
		'CLI_FOTO',
		'CLI_CEP',
		'CLI_CIDADE',
		'CLI_UF',
		'CLI_BAIRRO',
		'CLI_ENDERECO',
		'CLI_LOGRAOUDO',
		'CLI_FONE',
		'CLI_CELULAR',
		'CLI_EMAIL',
		'CLI_STATUS',
		*/
                array(
                    'class'=>'tcButtonColumn',
                    'header'=>Yii::t('ses', 'Gerenciar'),
                    'template'=>'{view}',
                    'url'=>'/siteadmin/cliente/view/id',
                    'atributte'=>'CLIENTE_ID',
                    'legenda'=>'icon-wrench',
                    'visible'=>'IndicaAguardaRetorno',
                ),
            ),
        ), true))
        )
    )
); 



?>
