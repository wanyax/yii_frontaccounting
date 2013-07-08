<?php
/* @var $this CustomerBranchInformationController */
/* @var $model CustomerBranch */

$this->breadcrumbs=array(
	'Customer Branches'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CustomerBranch', 'url'=>array('index')),
	array('label'=>'Create CustomerBranch', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#customer-branch-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Customer Branches</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'customer-branch-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'created_time',
		'created_by',
		'updated_time',
		'updated_by',
		'is_deleted',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
