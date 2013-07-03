<?php
/* @var $this SalesOrderController */
/* @var $model SalesOrder */

$this->breadcrumbs=array(
	'Sales Orders'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SalesOrder', 'url'=>array('index')),
	array('label'=>'Create SalesOrder', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sales-order-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sales Orders</h1>

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
	'id'=>'sales-order-grid',
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
		'transaction_type_id',
		'transaction_no',
		'version',
		'type',
		'customer_head_id',
		'customer_branch_id',
		'reference',
		'customer_reference',
		'comment',
		'date',
		'sales_type_id',
		'shipping_company_id',
		'delivery_address',
		'contact_phone',
		'contact_email',
		'deliver_to',
		'freight_cost',
		'from_stock_location_id',
		'delivery_date',
		'payment_term_id',
		'total',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
