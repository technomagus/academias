<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('MODALIDADE_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->MODALIDADE_ID),array('view','id'=>$data->MODALIDADE_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MOD_TITULO')); ?>:</b>
	<?php echo CHtml::encode($data->MOD_TITULO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MOD_DESCRICAO')); ?>:</b>
	<?php echo CHtml::encode($data->MOD_DESCRICAO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MOD_HORARIOxTURNOxPRECO')); ?>:</b>
	<?php echo CHtml::encode($data->MOD_HORARIOxTURNOxPRECO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MOD_STATUS')); ?>:</b>
	<?php echo CHtml::encode($data->MOD_STATUS); ?>
	<br />


</div>