<?php

$this->menu=array(
    array('label'=>'Voltar','icon'=>'arrow-left','url'=>array('admin')),
    array('label'=>'Atualizar Cliente','icon'=>'pencil','url'=>array('update','id'=>$model->CLIENTE_ID)),
    array('label'=>'Desligar/Ligar Cliente',  'icon'=>'minus-sign', 'url'=>'#','linkOptions'=>array('submit'=>array('desligar','id'=>$model->CLIENTE_ID),'confirm'=>'Deseja Desligar/Ligar este cliente?')),
    array('label'=>'Excluir Cliente',  'icon'=>'trash', 'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->CLIENTE_ID),'confirm'=>'Deseja realmente excluir este item?')),
    array('label'=>'Financeiro'),
    array('label'=>'Gerenciar','icon'=>'book','url'=>array('/siteadmin/financeiro/admin','id'=>$model->CLIENTE_ID)),
);
?>

<?php 
$this->widget('bootstrap.widgets.TbDetailView',array(
    'data'=>$model,
    'attributes'=>array(
                    'CLIENTE_ID',
                    'CLI_NOME',
                    'CLI_CPF',
                    'CLI_RG',
                    'CLI_DATANASCIMENTO',
                    'CLI_DATAMATRICULA',
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
        ),
    )
); 
?>
