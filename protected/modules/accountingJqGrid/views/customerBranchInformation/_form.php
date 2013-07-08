<?php
/* @var $this CustomerBranchInformationController */
/* @var $model CustomerBranch */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-branch-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'created_time'); ?>
		<?php echo $form->textField($model,'created_time'); ?>
		<?php echo $form->error($model,'created_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_time'); ?>
		<?php echo $form->textField($model,'updated_time'); ?>
		<?php echo $form->error($model,'updated_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_by'); ?>
		<?php echo $form->textField($model,'updated_by'); ?>
		<?php echo $form->error($model,'updated_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_deleted'); ?>
		<?php echo $form->textField($model,'is_deleted'); ?>
		<?php echo $form->error($model,'is_deleted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deleted_time'); ?>
		<?php echo $form->textField($model,'deleted_time'); ?>
		<?php echo $form->error($model,'deleted_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deleted_by'); ?>
		<?php echo $form->textField($model,'deleted_by'); ?>
		<?php echo $form->error($model,'deleted_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_head_id'); ?>
		<?php echo $form->textField($model,'customer_head_id'); ?>
		<?php echo $form->error($model,'customer_head_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reference'); ?>
		<?php echo $form->textField($model,'reference',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'reference'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'physical_address'); ?>
		<?php echo $form->textArea($model,'physical_address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'physical_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mailing_address'); ?>
		<?php echo $form->textArea($model,'mailing_address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'mailing_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'area_id'); ?>
		<?php echo $form->textField($model,'area_id'); ?>
		<?php echo $form->error($model,'area_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sales_person_id'); ?>
		<?php echo $form->textField($model,'sales_person_id'); ?>
		<?php echo $form->error($model,'sales_person_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_name'); ?>
		<?php echo $form->textField($model,'contact_name',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'contact_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'default_location_id'); ?>
		<?php echo $form->textField($model,'default_location_id'); ?>
		<?php echo $form->error($model,'default_location_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tax_group_id'); ?>
		<?php echo $form->textField($model,'tax_group_id'); ?>
		<?php echo $form->error($model,'tax_group_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sales_account_id'); ?>
		<?php echo $form->textField($model,'sales_account_id'); ?>
		<?php echo $form->error($model,'sales_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sales_discount_account_id'); ?>
		<?php echo $form->textField($model,'sales_discount_account_id'); ?>
		<?php echo $form->error($model,'sales_discount_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'receivable_account_id'); ?>
		<?php echo $form->textField($model,'receivable_account_id'); ?>
		<?php echo $form->error($model,'receivable_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_discount_account_id'); ?>
		<?php echo $form->textField($model,'payment_discount_account_id'); ?>
		<?php echo $form->error($model,'payment_discount_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'default_shipping_company_id'); ?>
		<?php echo $form->textField($model,'default_shipping_company_id'); ?>
		<?php echo $form->error($model,'default_shipping_company_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'disable_transaction'); ?>
		<?php echo $form->textField($model,'disable_transaction'); ?>
		<?php echo $form->error($model,'disable_transaction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sales_size_id'); ?>
		<?php echo $form->textField($model,'sales_size_id'); ?>
		<?php echo $form->error($model,'sales_size_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_active'); ?>
		<?php echo $form->textField($model,'is_active'); ?>
		<?php echo $form->error($model,'is_active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->