<?php
/* @var $this ExchangeRateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Exchange Rates',
);

$this->menu=array(
	array('label'=>'Create ExchangeRate', 'url'=>array('create')),
	array('label'=>'Manage ExchangeRate', 'url'=>array('admin')),
);
?>

<h1>Exchange Rates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
