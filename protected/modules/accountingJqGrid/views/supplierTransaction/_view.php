<?php
/* @var $this SupplierTransactionController */
/* @var $data SupplierTransaction */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaction_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->transaction_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_id')); ?>:</b>
	<?php echo CHtml::encode($data->supplier_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reference')); ?>:</b>
	<?php echo CHtml::encode($data->reference); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_reference')); ?>:</b>
	<?php echo CHtml::encode($data->supplier_reference); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('overdue_date')); ?>:</b>
	<?php echo CHtml::encode($data->overdue_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('overdue_amount')); ?>:</b>
	<?php echo CHtml::encode($data->overdue_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('overdue_discount')); ?>:</b>
	<?php echo CHtml::encode($data->overdue_discount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('overdue_goods_and_service_tax')); ?>:</b>
	<?php echo CHtml::encode($data->overdue_goods_and_service_tax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate')); ?>:</b>
	<?php echo CHtml::encode($data->rate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('allocation')); ?>:</b>
	<?php echo CHtml::encode($data->allocation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_tax_included')); ?>:</b>
	<?php echo CHtml::encode($data->is_tax_included); ?>
	<br />

	*/ ?>

</div>