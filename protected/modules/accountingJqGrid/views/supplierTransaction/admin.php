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
                        'Transaction Type',
                        'Supplier',
                        'Reference',
                        'Supplier Reference',
                        'Date',
                        'Overdue Date',
                        'Overdue Dicount',
                        'Overdue Amount',
                        'Overdue Goods and Service Tax',
                        'Rate',
                        'Allocation',
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
                            'name' => 'transaction_type_id',
                            'index' => 'transaction_type_id',
                            'width' => 300,
                            'editable' => false,
                        ),
                        array(
                            'name' => 'supplier_id',
                            'index' => 'supplier_id',
                            'width' => 300,
                            'editable' => true
                        ),
                        array(
                            'name' => 'reference',
                            'index' => 'reference',
                            'width' => 100,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'supplier_reference',
                            'index' => 'supplier_reference',
                            'width' => 100,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'date',
                            'index' => 'date',
                            'width' => 100,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'overdue_date',
                            'index' => 'overdue_date',
                            'width' => 100,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'overdue_amount',
                            'index' => 'overdue_amount',
                            'width' => 100,
                            'editable' => true
                        ),
                         array(
                            'name' => 'overdue_discount',
                            'index' => 'overdue_discount',
                            'width' => 100,
                            'editable' => true
                        ),
                        array(
                            'name' => 'overdue_goods_and_service_tax',
                            'index' => 'overdue_goods_and_service_tax',
                            'width' => 100,
                            'editable' => true
                        ),
                        array(
                            'name' => 'rate',
                            'index' => 'rate',
                            'width' => 100,
                            'editable' => true
                        ),
                         array(
                            'name' => 'allocation',
                            'index' => 'allocation',
                            'width' => 100,
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
