<?php
/* @var $this SalesOrderController */
/* @var $model SalesOrder */

$this->breadcrumbs=array(
	'Sales Orders'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SalesOrder', 'url'=>array('index')),
	array('label'=>'Create SalesOrder', 'url'=>array('create')),
	array('label'=>'Update SalesOrder', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SalesOrder', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SalesOrder', 'url'=>array('admin')),
);
?>

<h1>View SalesOrder #<?php echo $model->id; ?></h1>

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
		'transaction_no',
		'version',
		'type',
		'customer_head_id',
		'customer_branch_id',
		'reference',
		'customer_reference',
		'comment',
		'date',
		'sales_type_id',
		'shipping_company_id',
		'delivery_address',
		'contact_phone',
		'contact_email',
		'deliver_to',
		'freight_cost',
		'from_stock_location_id',
		'delivery_date',
		'payment_term_id',
		'total',
	),
)); ?>
