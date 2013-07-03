<?php
/* @var $this AreaController */
/* @var $model Area */

$this->breadcrumbs=array(
	// ...
);

$this->menu=array(
    // ...
);
?>

<h1>Manage Area</h1>

<?php
$this->widget(
    'ext.JqGrid.JqGrid',
    array(
        'gridId' => 'demo-grid',
        'pagerId' => 'demo-pager',
        'gridOptions' => array(
            'grid' => array(  // new param
                'geo' => array(
                    'height' => 'auto',
                    'width' => '970',
                ),
                'column' => array(
                    'names' => array('ID', 'Stock', 'Sales Type', 'Currency', 'Price'),
                    'models' => array(
                        array(
                            'name' => 'id',
                            'index' => 'id',
                            'width' => 100,
                            'hidden' => false,
                            'key' => true,
                        ),
                        array(
                            'name' => 'fa_stock_mastername.description',
                            'index' => 'fa_stock_mastername.description',
                            'width' => 300,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'fa_sales_type.name',
                            'index' => 'fa_sales_type.name',
                            'width' => 300,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'fa_currency.code',
                            'index' => 'fa_currency.code',
                            'width' => 100,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'price',
                            'index' => 'price',
                            'width' => 300,
                            'editable' => true,
                        ),
                    ),
                ),
                'data' => array(
                    'type' => 'json',
                ),
                'dataRmt' => array(
                    'url' => 'adminDataJson',
                ),
            ),
            'navBar' => array(
                'htmlElm' => 'demo-pager',
                'data' => array(
                    'visible' => true,
                    'rowList' => array(10, 20, 30),
                    'rowNum' => 20,
                ),
            ),
        ),
    )
);
?>
