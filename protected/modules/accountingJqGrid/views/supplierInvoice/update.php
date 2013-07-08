<?php
/* @var $this SupplierInvoiceController */
/* @var $model SupplierInvoiceItem */

$this->breadcrumbs=array(
	'Supplier Invoice Items'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SupplierInvoiceItem', 'url'=>array('index')),
	array('label'=>'Create SupplierInvoiceItem', 'url'=>array('create')),
	array('label'=>'View SupplierInvoiceItem', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SupplierInvoiceItem', 'url'=>array('admin')),
);
?>

<h1>Update SupplierInvoiceItem <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>