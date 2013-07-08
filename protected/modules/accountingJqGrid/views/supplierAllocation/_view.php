<?php
/* @var $this SupplierAllocationController */
/* @var $data SupplierAllocation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_time')); ?>:</b>
	<?php echo CHtml::encode($data->created_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_time')); ?>:</b>
	<?php echo CHtml::encode($data->updated_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_by')); ?>:</b>
	<?php echo CHtml::encode($data->updated_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_deleted')); ?>:</b>
	<?php echo CHtml::encode($data->is_deleted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deleted_time')); ?>:</b>
	<?php echo CHtml::encode($data->deleted_time); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('deleted_by')); ?>:</b>
	<?php echo CHtml::encode($data->deleted_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('from_transaction_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->from_transaction_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('from_transaction_no')); ?>:</b>
	<?php echo CHtml::encode($data->from_transaction_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('to_transaction_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->to_transaction_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('to_transaction_no')); ?>:</b>
	<?php echo CHtml::encode($data->to_transaction_no); ?>
	<br />

	*/ ?>

</div>