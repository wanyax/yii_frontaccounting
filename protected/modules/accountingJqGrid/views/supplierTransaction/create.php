<?php
/* @var $this SupplierTransactionController */
/* @var $model SupplierTransaction */

$this->breadcrumbs=array(
	'Supplier Transactions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SupplierTransaction', 'url'=>array('index')),
	array('label'=>'Manage SupplierTransaction', 'url'=>array('admin')),
);
?>

<h1>Create SupplierTransaction</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>