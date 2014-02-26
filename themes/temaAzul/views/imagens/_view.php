<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('im_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->im_id),array('view','id'=>$data->im_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('im_id_estran')); ?>:</b>
	<?php echo CHtml::encode($data->im_id_estran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('im_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->im_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('im_imagem')); ?>:</b>
	<?php echo CHtml::encode($data->im_imagem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('im_titulo')); ?>:</b>
	<?php echo CHtml::encode($data->im_titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('im_descricao')); ?>:</b>
	<?php echo CHtml::encode($data->im_descricao); ?>
	<br />


</div>