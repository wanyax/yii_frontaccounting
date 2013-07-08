<?php
/* @var $this PurchaseOrderController */
/* @var $model PurchaseOrder */

$this->breadcrumbs=array(
	'Purchase Orders'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PurchaseOrder', 'url'=>array('index')),
	array('label'=>'Create PurchaseOrder', 'url'=>array('create')),
	array('label'=>'Update PurchaseOrder', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PurchaseOrder', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PurchaseOrder', 'url'=>array('admin')),
);
?>

<h1>View PurchaseOrder #<?php echo $model->id; ?></h1>

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
		'supplier_id',
		'comment',
		'date',
		'reference',
		'requisition_no',
		'into_stock_location_id',
		'delivery_address',
		'total',
		'is_tax_included',
	),
)); ?>
