<?php
/* @var $this SupplierInvoiceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Supplier Invoice Items',
);

$this->menu=array(
	array('label'=>'Create SupplierInvoiceItem', 'url'=>array('create')),
	array('label'=>'Manage SupplierInvoiceItem', 'url'=>array('admin')),
);
?>

<h1>Supplier Invoice Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
