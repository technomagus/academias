<div class="view">
        <b><?php echo CHtml::encode($data->getAttributeLabel('sl_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sl_id),array('view','id'=>$data->sl_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sl_titulo')); ?>:</b>
	<?php echo CHtml::encode($data->sl_titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sl_link')); ?>:</b>
	<?php echo CHtml::encode($data->sl_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sl_descricao')); ?>:</b>
	<?php echo CHtml::encode($data->sl_descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sl_dtcricao')); ?>:</b>
	<?php echo CHtml::encode($data->sl_dtcriacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sl_status')); ?>:</b>
	<?php echo CHtml::encode($data->sl_status ? 'Ativo' : 'Inátivo'); ?>
	<br />

        <hr/>

</div>