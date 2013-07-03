<?php
/* @var $this SalesPersonController */
/* @var $model SalesPerson */

$this->breadcrumbs=array(
	'Sales People'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List SalesPerson', 'url'=>array('index')),
	array('label'=>'Create SalesPerson', 'url'=>array('create')),
	array('label'=>'Update SalesPerson', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SalesPerson', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SalesPerson', 'url'=>array('admin')),
);
?>

<h1>View SalesPerson #<?php echo $model->id; ?></h1>

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
		'name',
		'phone',
		'fax',
		'email',
		'provision',
		'provision2',
		'break_point',
		'is_active',
	),
)); ?>
