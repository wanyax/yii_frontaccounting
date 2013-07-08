<?php
/* @var $this SupplierTransactionController */
/* @var $model SupplierTransaction */

$this->breadcrumbs=array(
	'Supplier Transactions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SupplierTransaction', 'url'=>array('index')),
	array('label'=>'Create SupplierTransaction', 'url'=>array('create')),
	array('label'=>'Update SupplierTransaction', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SupplierTransaction', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SupplierTransaction', 'url'=>array('admin')),
);
?>

<h1>View SupplierTransaction #<?php echo $model->id; ?></h1>

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
		'transaction_type_id',
		'supplier_id',
		'reference',
		'supplier_reference',
		'date',
		'overdue_date',
		'overdue_amount',
		'overdue_discount',
		'overdue_goods_and_service_tax',
		'rate',
		'allocation',
		'is_tax_included',
	),
)); ?>
