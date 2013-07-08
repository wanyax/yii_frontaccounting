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
                        'Transaction Type',
                        'GL Account',
                        'Description',
                        'Quantity',
                        'Unit Price',
                        'Unit Tax',
                        'Memo'
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
                            'name' => 'supplier_transaction_id',
                            'index' => 'supplier_transaction_id',
                            'width' => 300,
                            'editable' => false,
                        ),
                        array(
                            'name' => 'transaction_type_id',
                            'index' => 'transaction_type_id',
                            'width' => 300,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'general_ledger_account_id',
                            'index' => 'general_ledger_account_id',
                            'width' => 300,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'description',
                            'index' => 'description',
                            'width' => 300,
                            'editable' => true
                        ),
                        array(
                            'name' => 'quantity',
                            'index' => 'quantity',
                            'width' => 200,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'price_per_unit',
                            'index' => 'price_per_unit',
                            'width' => 200,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'tax_per_unit',
                            'index' => 'tax_per_unit',
                            'width' => 200,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'memo',
                            'index' => 'memo',
                            'width' => 300,
                            'editable' => true,
                            'edittype' => 'textarea'
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
