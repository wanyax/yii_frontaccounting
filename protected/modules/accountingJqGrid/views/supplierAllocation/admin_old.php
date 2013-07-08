<?php
/* @var $this SupplierAllocationController */
/* @var $model SupplierAllocation */

$this->breadcrumbs=array(
	'Supplier Allocations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SupplierAllocation', 'url'=>array('index')),
	array('label'=>'Create SupplierAllocation', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#supplier-allocation-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Supplier Allocations</h1>

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
	'id'=>'supplier-allocation-grid',
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
		'amount',
		'date',
		'from_transaction_type_id',
		'from_transaction_no',
		'to_transaction_type_id',
		'to_transaction_no',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
