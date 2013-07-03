<?php
/* @var $this CustomerHeadInformationController */
/* @var $model CustomerHead */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-head-form',
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
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
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
		<?php echo $form->labelEx($model,'goods_and_services_tax_no'); ?>
		<?php echo $form->textField($model,'goods_and_services_tax_no',array('size'=>55,'maxlength'=>55)); ?>
		<?php echo $form->error($model,'goods_and_services_tax_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currency_id'); ?>
		<?php echo $form->textField($model,'currency_id'); ?>
		<?php echo $form->error($model,'currency_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sales_type_id'); ?>
		<?php echo $form->textField($model,'sales_type_id'); ?>
		<?php echo $form->error($model,'sales_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dimension1_id'); ?>
		<?php echo $form->textField($model,'dimension1_id'); ?>
		<?php echo $form->error($model,'dimension1_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dimension2_id'); ?>
		<?php echo $form->textField($model,'dimension2_id'); ?>
		<?php echo $form->error($model,'dimension2_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'credit_status_id'); ?>
		<?php echo $form->textField($model,'credit_status_id'); ?>
		<?php echo $form->error($model,'credit_status_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_term_id'); ?>
		<?php echo $form->textField($model,'payment_term_id'); ?>
		<?php echo $form->error($model,'payment_term_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discount'); ?>
		<?php echo $form->textField($model,'discount'); ?>
		<?php echo $form->error($model,'discount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_discount'); ?>
		<?php echo $form->textField($model,'payment_discount'); ?>
		<?php echo $form->error($model,'payment_discount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'credit_limit'); ?>
		<?php echo $form->textField($model,'credit_limit'); ?>
		<?php echo $form->error($model,'credit_limit'); ?>
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