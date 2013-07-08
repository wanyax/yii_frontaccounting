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
                        'Comment',
                        'Date',
                        'Reference',
                        'Requisition No.',
                        'Location',
                        'Delivery Address',
                        'Total',
                        'Tax Included'
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
                            'name' => 'comment',
                            'index' => 'comment',
                            'width' => 300,
                            'editable' => true,
                            'edittype' => 'textarea'
                        ),
                        array(
                            'name' => 'date',
                            'index' => 'date',
                            'width' => 200,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'reference',
                            'index' => 'reference',
                            'width' => 100,
                            'editable' => true
                        ),
                        array(
                            'name' => 'requisition_no',
                            'index' => 'requisition_no',
                            'width' => 100,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'intoStockLocation.name',
                            'index' => 'intoStockLocation.name',
                            'width' => 100,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'delivery_address',
                            'index' => 'delivery_address',
                            'width' => 300,
                            'editable' => true,
                            'edittype' => 'textarea'
                        ),
                        array(
                            'name' => 'total',
                            'index' => 'total',
                            'width' => 200,
                            'editable' => true
                        ),
                         array(
                            'name' => 'is_tax_included',
                            'index' => 'is_tax_included',
                            'width' => 100,
                            'editable' => true,
                             'edittype' => 'select',
                            'editoptions' => array('value' => '0:No; 1:Yes;') 
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
