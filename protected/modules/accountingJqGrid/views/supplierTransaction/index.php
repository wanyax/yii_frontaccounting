<?php
/* @var $this SupplierTransactionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Supplier Transactions',
);

$this->menu=array(
	array('label'=>'Create SupplierTransaction', 'url'=>array('create')),
	array('label'=>'Manage SupplierTransaction', 'url'=>array('admin')),
);
?>

<h1>Supplier Transactions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
