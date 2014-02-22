<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('FINANCEIRO_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FINANCEIRO_ID),array('view','id'=>$data->FINANCEIRO_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIN_CLIENTEID')); ?>:</b>
	<?php echo CHtml::encode($data->FIN_CLIENTEID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIN_VALOR')); ?>:</b>
	<?php echo CHtml::encode($data->FIN_VALOR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIN_DESCRICAO')); ?>:</b>
	<?php echo CHtml::encode($data->FIN_DESCRICAO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIN_VENCIMENTO')); ?>:</b>
	<?php echo CHtml::encode($data->FIN_VENCIMENTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIN_BAIXA')); ?>:</b>
	<?php echo CHtml::encode($data->FIN_BAIXA); ?>
	<br />


</div>