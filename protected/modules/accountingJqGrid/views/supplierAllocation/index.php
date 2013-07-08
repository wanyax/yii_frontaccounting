<?php
/* @var $this SupplierAllocationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Supplier Allocations',
);

$this->menu=array(
	array('label'=>'Create SupplierAllocation', 'url'=>array('create')),
	array('label'=>'Manage SupplierAllocation', 'url'=>array('admin')),
);
?>

<h1>Supplier Allocations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
