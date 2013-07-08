<?php
/* @var $this SupplierAllocationController */
/* @var $model SupplierAllocation */

$this->breadcrumbs=array(
	'Supplier Allocations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SupplierAllocation', 'url'=>array('index')),
	array('label'=>'Create SupplierAllocation', 'url'=>array('create')),
	array('label'=>'Update SupplierAllocation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SupplierAllocation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SupplierAllocation', 'url'=>array('admin')),
);
?>

<h1>View SupplierAllocation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'created_time',
		'created_by',
		'updated_time',
		'updated_by',
		'is_deleted',
		'deleted_time',
		'deleted_by',
		'amount',
		'date',
		'from_transaction_type_id',
		'from_transaction_no',
		'to_transaction_type_id',
		'to_transaction_no',
	),
)); ?>
