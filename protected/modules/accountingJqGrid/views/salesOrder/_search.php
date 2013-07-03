<?php
/* @var $this SalesOrderController */
/* @var $model SalesOrder */
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
		<?php echo $form->label($model,'transaction_type_id'); ?>
		<?php echo $form->textField($model,'transaction_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transaction_no'); ?>
		<?php echo $form->textField($model,'transaction_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'version'); ?>
		<?php echo $form->textField($model,'version'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customer_head_id'); ?>
		<?php echo $form->textField($model,'customer_head_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customer_branch_id'); ?>
		<?php echo $form->textField($model,'customer_branch_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reference'); ?>
		<?php echo $form->textField($model,'reference',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customer_reference'); ?>
		<?php echo $form->textArea($model,'customer_reference',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sales_type_id'); ?>
		<?php echo $form->textField($model,'sales_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shipping_company_id'); ?>
		<?php echo $form->textField($model,'shipping_company_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'delivery_address'); ?>
		<?php echo $form->textArea($model,'delivery_address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_phone'); ?>
		<?php echo $form->textField($model,'contact_phone',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_email'); ?>
		<?php echo $form->textField($model,'contact_email',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deliver_to'); ?>
		<?php echo $form->textArea($model,'deliver_to',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'freight_cost'); ?>
		<?php echo $form->textField($model,'freight_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'from_stock_location_id'); ?>
		<?php echo $form->textField($model,'from_stock_location_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'delivery_date'); ?>
		<?php echo $form->textField($model,'delivery_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_term_id'); ?>
		<?php echo $form->textField($model,'payment_term_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total'); ?>
		<?php echo $form->textField($model,'total'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->