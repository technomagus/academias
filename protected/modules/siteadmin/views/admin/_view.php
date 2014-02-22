<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('adm_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->adm_id),array('view','id'=>$data->adm_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adm_nome')); ?>:</b>
	<?php echo CHtml::encode($data->adm_nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adm_email')); ?>:</b>
	<?php echo CHtml::encode($data->adm_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adm_senha')); ?>:</b>
	<?php echo CHtml::encode($data->adm_senha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adm_nivel')); ?>:</b>
	<?php echo CHtml::encode($data->adm_nivel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adm_status')); ?>:</b>
	<?php echo CHtml::encode($data->adm_status); ?>
	<br />


</div>