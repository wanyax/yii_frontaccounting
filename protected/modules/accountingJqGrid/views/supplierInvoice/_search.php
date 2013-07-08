<?php
/* @var $this SupplierInvoiceController */
/* @var $model SupplierInvoiceItem */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_time'); ?>
		<?php echo $form->textField($model,'created_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_time'); ?>
		<?php echo $form->textField($model,'updated_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_by'); ?>
		<?php echo $form->textField($model,'updated_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_deleted'); ?>
		<?php echo $form->textField($model,'is_deleted'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deleted_time'); ?>
		<?php echo $form->textField($model,'deleted_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deleted_by'); ?>
		<?php echo $form->textField($model,'deleted_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supplier_transaction_id'); ?>
		<?php echo $form->textField($model,'supplier_transaction_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transaction_type_id'); ?>
		<?php echo $form->textField($model,'transaction_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'general_ledger_account_id'); ?>
		<?php echo $form->textField($model,'general_ledger_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goods_received_note_batch_item_id'); ?>
		<?php echo $form->textField($model,'goods_received_note_batch_item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'purchase_order_item_id'); ?>
		<?php echo $form->textField($model,'purchase_order_item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock_master_id'); ?>
		<?php echo $form->textField($model,'stock_master_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price_per_unit'); ?>
		<?php echo $form->textField($model,'price_per_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tax_per_unit'); ?>
		<?php echo $form->textField($model,'tax_per_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'memo'); ?>
		<?php echo $form->textArea($model,'memo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->