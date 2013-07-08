<?php
/* @var $this SupplierInvoiceController */
/* @var $model SupplierInvoiceItem */

$this->breadcrumbs=array(
	'Supplier Invoice Items'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SupplierInvoiceItem', 'url'=>array('index')),
	array('label'=>'Create SupplierInvoiceItem', 'url'=>array('create')),
	array('label'=>'Update SupplierInvoiceItem', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SupplierInvoiceItem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SupplierInvoiceItem', 'url'=>array('admin')),
);
?>

<h1>View SupplierInvoiceItem #<?php echo $model->id; ?></h1>

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
		'supplier_transaction_id',
		'transaction_type_id',
		'general_ledger_account_id',
		'goods_received_note_batch_item_id',
		'purchase_order_item_id',
		'stock_master_id',
		'description',
		'quantity',
		'price_per_unit',
		'tax_per_unit',
		'memo',
	),
)); ?>
