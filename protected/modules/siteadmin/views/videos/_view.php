<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('nnumevid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nnumevid),array('view','id'=>$data->nnumevid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clink')); ?>:</b>
	<?php echo CHtml::encode($data->clink); ?>
	<br />


</div>