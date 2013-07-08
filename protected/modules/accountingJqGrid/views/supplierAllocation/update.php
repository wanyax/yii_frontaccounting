<?php
/* @var $this SupplierAllocationController */
/* @var $model SupplierAllocation */

$this->breadcrumbs=array(
	'Supplier Allocations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SupplierAllocation', 'url'=>array('index')),
	array('label'=>'Create SupplierAllocation', 'url'=>array('create')),
	array('label'=>'View SupplierAllocation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SupplierAllocation', 'url'=>array('admin')),
);
?>

<h1>Update SupplierAllocation <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>