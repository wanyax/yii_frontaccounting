<?php
/* @var $this SupplierInvoiceController */
/* @var $model SupplierInvoiceItem */

$this->breadcrumbs=array(
	'Supplier Invoice Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SupplierInvoiceItem', 'url'=>array('index')),
	array('label'=>'Manage SupplierInvoiceItem', 'url'=>array('admin')),
);
?>

<h1>Create SupplierInvoiceItem</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>