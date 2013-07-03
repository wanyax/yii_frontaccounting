<?php
/* @var $this CustomerHeadInformationController */
/* @var $model CustomerHead */

$this->breadcrumbs=array(
	'Customer Heads'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CustomerHead', 'url'=>array('index')),
	array('label'=>'Create CustomerHead', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#customer-head-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Customer Heads</h1>

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
	'id'=>'customer-head-grid',
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
		'name',
		'reference',
		'physical_address',
		'mailing_address',
		'goods_and_services_tax_no',
		'currency_id',
		'sales_type_id',
		'dimension1_id',
		'dimension2_id',
		'credit_status_id',
		'payment_term_id',
		'discount',
		'payment_discount',
		'credit_limit',
		'note',
		'is_active',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
