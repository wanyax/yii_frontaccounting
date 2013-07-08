<?php
/* @var $this SupplierInvoiceController */
/* @var $model SupplierInvoiceItem */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'supplier-invoice-item-form',
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
		<?php echo $form->labelEx($model,'supplier_transaction_id'); ?>
		<?php echo $form->textField($model,'supplier_transaction_id'); ?>
		<?php echo $form->error($model,'supplier_transaction_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transaction_type_id'); ?>
		<?php echo $form->textField($model,'transaction_type_id'); ?>
		<?php echo $form->error($model,'transaction_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'general_ledger_account_id'); ?>
		<?php echo $form->textField($model,'general_ledger_account_id'); ?>
		<?php echo $form->error($model,'general_ledger_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goods_received_note_batch_item_id'); ?>
		<?php echo $form->textField($model,'goods_received_note_batch_item_id'); ?>
		<?php echo $form->error($model,'goods_received_note_batch_item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purchase_order_item_id'); ?>
		<?php echo $form->textField($model,'purchase_order_item_id'); ?>
		<?php echo $form->error($model,'purchase_order_item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock_master_id'); ?>
		<?php echo $form->textField($model,'stock_master_id'); ?>
		<?php echo $form->error($model,'stock_master_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_per_unit'); ?>
		<?php echo $form->textField($model,'price_per_unit'); ?>
		<?php echo $form->error($model,'price_per_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tax_per_unit'); ?>
		<?php echo $form->textField($model,'tax_per_unit'); ?>
		<?php echo $form->error($model,'tax_per_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'memo'); ?>
		<?php echo $form->textArea($model,'memo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'memo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->