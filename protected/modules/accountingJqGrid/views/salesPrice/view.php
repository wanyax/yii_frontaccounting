<?php
/* @var $this SalesPriceController */
/* @var $model SalesPrice */

$this->breadcrumbs=array(
	'Sales Prices'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SalesPrice', 'url'=>array('index')),
	array('label'=>'Create SalesPrice', 'url'=>array('create')),
	array('label'=>'Update SalesPrice', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SalesPrice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SalesPrice', 'url'=>array('admin')),
);
?>

<h1>View SalesPrice #<?php echo $model->id; ?></h1>

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
		'stock_master_id',
		'sales_type_id',
		'currency_id',
		'price',
	),
)); ?>
