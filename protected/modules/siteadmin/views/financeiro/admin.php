<?php

Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl.'/js/jquery/jquery.price_formate.min.js') ;

Yii::app()->clientScript->registerScript('preco_formatar','
      $("#vlParcela").priceFormat({
                         prefix: "R$ ",
                         centsSeparator: ",",
                         thousandsSeparator: "."
      });
');

$this->menu=array(
array('label'=>'Voltar','icon'=>'arrow-left','url'=>array('/siteadmin/cliente/view/', 'id'=>$model->FIN_CLIENTEID)),
array('label'=>'Incluir Parcela','icon'=>'pencil','url'=>array('create', 'id'=>$model->FIN_CLIENTEID)),
);

$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
                             'id'=>'BaixaParcela',
                             'options'=>array(
                                 'title'=>'Receber Parcela',
                                 'autoOpen'=>false,
                                 'modal'=>true,
                                 'width'=>600,
                                 'height'=>400,
                                 'buttons'=>array(
                                       array('text'=>'Ok','click'=> 'js:function(){'
                                           . '$.ajax({'
                                           . 'url: "'.Yii::app()->createUrl("/siteadmin/cliente/recebeparcela").'" ,'
                                           //. 'data: {id '
                                           . '}).done(function(data){'
                                           . '$(this).dialog("close");'
                                           . 'window.location.reload();'
                                           . '}).fail(function(){});'
                                           . '$(this).dialog("close"); '
                                           . 'window.location.reload();}'),
                                    ),
                             ),
                        )
                  );

          echo '<label for="valor">Valor:</label>';        
          echo '<input type="text" name="valor" value="" id="vlParcela"/>';
          echo '<br>';
          echo '<label for="Baixa">Data Recebimento:</label>';        
          $this->widget('ext.datetimepicker.datetimepicker',array('id'=>'FIN_VENCIMENTO', 'value'=>date('d-m-Y'),'lb'=>'Baixa'));
          $this->widget(
            'bootstrap.widgets.TbRedactorJs',
            [
                'name' => 'some_name',
                'id'=>'conteudo_edicao'
            ]
         );
         
//       echo '<div class="form-actions">';
  $this->endWidget('zii.widgets.jui.CJuiDialog');

  
?>
<h3>Financeiro <?php echo $model->fINCLIENTE->CLI_NOME;?></h3>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'financeiro-grid',
'dataProvider'=>$model->search(),
'type' => 'striped bordered condensed',
'columns'=>array(
//		'FINANCEIRO_ID',
//		'FIN_CLIENTEID',
                'FIN_DESCRICAO',
                array('name'=>'FIN_VALOR', 'htmlOptions'=>array('style'=>'text-align:right;')),
                array('name'=>'FIN_VENCIMENTO', 'htmlOptions'=>array('style'=>'text-align:center;')),
		'FIN_VENCIMENTO',
		'FIN_BAIXA',
                array('header'=>Yii::t('ses','Receber'),
                      'class'=>'tcButtonBaixaParcela',
                      'template'  =>'{view}',
                      'icon'=>'icon-ok',
                      'atributte'=>'FINANCEIRO_ID',
                      'seletor'=>array('vlParcela','conteudo_edicao'),
                      'dialog'=>'BaixaParcela',
                      'url'=>'/siteadmin/financeiro/loadData'
                     ),
),
)); ?>
