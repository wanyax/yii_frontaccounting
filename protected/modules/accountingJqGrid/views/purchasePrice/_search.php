<?php
/* @var $this PurchasePriceController */
/* @var $model PurchasePrice */
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
		<?php echo $form->label($model,'supplier_id'); ?>
		<?php echo $form->textField($model,'supplier_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock_master_id'); ?>
		<?php echo $form->textField($model,'stock_master_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supplier_measure_unit_id'); ?>
		<?php echo $form->textField($model,'supplier_measure_unit_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conversion_factor'); ?>
		<?php echo $form->textField($model,'conversion_factor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supplier_description'); ?>
		<?php echo $form->textField($model,'supplier_description',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->