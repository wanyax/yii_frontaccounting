<?php
/* @var $this SupplierTransactionController */
/* @var $model SupplierTransaction */

$this->breadcrumbs=array(
	'Supplier Transactions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SupplierTransaction', 'url'=>array('index')),
	array('label'=>'Create SupplierTransaction', 'url'=>array('create')),
	array('label'=>'View SupplierTransaction', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SupplierTransaction', 'url'=>array('admin')),
);
?>

<h1>Update SupplierTransaction <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>