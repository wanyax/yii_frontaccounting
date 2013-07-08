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
                    'width' => '1000',
                ),
                'column' => array(
                    'names' => array(
                        'ID',
                        'Supplier',
                        'Price',
                        'Measure Unit',
                        'Conversion Factor',
                        'Description'
                    ),
                    'models' => array(
                        array(
                            'name' => 'id',
                            'index' => 'id',
                            'width' => 100,
                            'hidden' => false,
                            'key' => true,
                        ),
                        array(
                            'name' => 'supplier.name',
                            'index' => 'supplier.name',
                            'width' => 300,
                            'editable' => false,
                        ),
                        array(
                            'name' => 'price',
                            'index' => 'price',
                            'width' => 200,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'supplierMeasureUnit.name',
                            'index' => 'supplierMeasureUnit.name',
                            'width' => 300,
                            'editable' => false,
                        ),
                        array(
                            'name' => 'conversion_factor',
                            'index' => 'conversion_factor',
                            'width' => 100,
                            'editable' => true
                        ),
                        array(
                            'name' => 'supplier_description',
                            'index' => 'supplier_description',
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
