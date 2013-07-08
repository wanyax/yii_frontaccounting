<?php
/* @var $this CustomerBranchInformationController */
/* @var $model CustomerBranch */

$this->breadcrumbs=array(
	'Customer Branches'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List CustomerBranch', 'url'=>array('index')),
	array('label'=>'Create CustomerBranch', 'url'=>array('create')),
	array('label'=>'Update CustomerBranch', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CustomerBranch', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CustomerBranch', 'url'=>array('admin')),
);
?>

<h1>View CustomerBranch #<?php echo $model->id; ?></h1>

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
		'customer_head_id',
		'name',
		'reference',
		'physical_address',
		'mailing_address',
		'area_id',
		'sales_person_id',
		'contact_name',
		'default_location_id',
		'tax_group_id',
		'sales_account_id',
		'sales_discount_account_id',
		'receivable_account_id',
		'payment_discount_account_id',
		'default_shipping_company_id',
		'disable_transaction',
		'sales_size_id',
		'note',
		'is_active',
	),
)); ?>
