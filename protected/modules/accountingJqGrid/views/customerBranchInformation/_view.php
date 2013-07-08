<?php
/* @var $this CustomerBranchInformationController */
/* @var $data CustomerBranch */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_head_id')); ?>:</b>
	<?php echo CHtml::encode($data->customer_head_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reference')); ?>:</b>
	<?php echo CHtml::encode($data->reference); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('physical_address')); ?>:</b>
	<?php echo CHtml::encode($data->physical_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mailing_address')); ?>:</b>
	<?php echo CHtml::encode($data->mailing_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_id')); ?>:</b>
	<?php echo CHtml::encode($data->area_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sales_person_id')); ?>:</b>
	<?php echo CHtml::encode($data->sales_person_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_name')); ?>:</b>
	<?php echo CHtml::encode($data->contact_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('default_location_id')); ?>:</b>
	<?php echo CHtml::encode($data->default_location_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tax_group_id')); ?>:</b>
	<?php echo CHtml::encode($data->tax_group_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sales_account_id')); ?>:</b>
	<?php echo CHtml::encode($data->sales_account_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sales_discount_account_id')); ?>:</b>
	<?php echo CHtml::encode($data->sales_discount_account_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('receivable_account_id')); ?>:</b>
	<?php echo CHtml::encode($data->receivable_account_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_discount_account_id')); ?>:</b>
	<?php echo CHtml::encode($data->payment_discount_account_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('default_shipping_company_id')); ?>:</b>
	<?php echo CHtml::encode($data->default_shipping_company_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('disable_transaction')); ?>:</b>
	<?php echo CHtml::encode($data->disable_transaction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sales_size_id')); ?>:</b>
	<?php echo CHtml::encode($data->sales_size_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />

	*/ ?>

</div>