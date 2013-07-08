<?php
/* @var $this SupplierTransactionController */
/* @var $model SupplierTransaction */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'supplier-transaction-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

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
		<?php echo $form->labelEx($model,'transaction_type_id'); ?>
		<?php echo $form->textField($model,'transaction_type_id'); ?>
		<?php echo $form->error($model,'transaction_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'supplier_id'); ?>
		<?php echo $form->textField($model,'supplier_id'); ?>
		<?php echo $form->error($model,'supplier_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reference'); ?>
		<?php echo $form->textArea($model,'reference',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'reference'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'supplier_reference'); ?>
		<?php echo $form->textField($model,'supplier_reference',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'supplier_reference'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'overdue_date'); ?>
		<?php echo $form->textField($model,'overdue_date'); ?>
		<?php echo $form->error($model,'overdue_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'overdue_amount'); ?>
		<?php echo $form->textField($model,'overdue_amount'); ?>
		<?php echo $form->error($model,'overdue_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'overdue_discount'); ?>
		<?php echo $form->textField($model,'overdue_discount'); ?>
		<?php echo $form->error($model,'overdue_discount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'overdue_goods_and_service_tax'); ?>
		<?php echo $form->textField($model,'overdue_goods_and_service_tax'); ?>
		<?php echo $form->error($model,'overdue_goods_and_service_tax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rate'); ?>
		<?php echo $form->textField($model,'rate'); ?>
		<?php echo $form->error($model,'rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'allocation'); ?>
		<?php echo $form->textField($model,'allocation'); ?>
		<?php echo $form->error($model,'allocation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_tax_included'); ?>
		<?php echo $form->textField($model,'is_tax_included'); ?>
		<?php echo $form->error($model,'is_tax_included'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->