<?php
/* @var $this SupplierInvoiceController */
/* @var $data SupplierInvoiceItem */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_transaction_id')); ?>:</b>
	<?php echo CHtml::encode($data->supplier_transaction_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaction_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->transaction_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('general_ledger_account_id')); ?>:</b>
	<?php echo CHtml::encode($data->general_ledger_account_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_received_note_batch_item_id')); ?>:</b>
	<?php echo CHtml::encode($data->goods_received_note_batch_item_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purchase_order_item_id')); ?>:</b>
	<?php echo CHtml::encode($data->purchase_order_item_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock_master_id')); ?>:</b>
	<?php echo CHtml::encode($data->stock_master_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_per_unit')); ?>:</b>
	<?php echo CHtml::encode($data->price_per_unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tax_per_unit')); ?>:</b>
	<?php echo CHtml::encode($data->tax_per_unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('memo')); ?>:</b>
	<?php echo CHtml::encode($data->memo); ?>
	<br />

	*/ ?>

</div>