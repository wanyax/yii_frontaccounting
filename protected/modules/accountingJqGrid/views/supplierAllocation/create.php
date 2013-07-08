<?php
/* @var $this SupplierAllocationController */
/* @var $model SupplierAllocation */

$this->breadcrumbs=array(
	'Supplier Allocations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SupplierAllocation', 'url'=>array('index')),
	array('label'=>'Manage SupplierAllocation', 'url'=>array('admin')),
);
?>

<h1>Create SupplierAllocation</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>