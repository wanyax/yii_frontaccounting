<?php
/* @var $this SupplierInvoiceController */
/* @var $model SupplierInvoiceItem */

$this->breadcrumbs=array(
	'Supplier Invoice Items'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SupplierInvoiceItem', 'url'=>array('index')),
	array('label'=>'Create SupplierInvoiceItem', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#supplier-invoice-item-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Supplier Invoice Items</h1>

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
	'id'=>'supplier-invoice-item-grid',
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
		'supplier_transaction_id',
		'transaction_type_id',
		'general_ledger_account_id',
		'goods_received_note_batch_item_id',
		'purchase_order_item_id',
		'stock_master_id',
		'description',
		'quantity',
		'price_per_unit',
		'tax_per_unit',
		'memo',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
