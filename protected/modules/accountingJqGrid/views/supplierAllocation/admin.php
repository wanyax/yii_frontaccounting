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
                        'Amount',
                        'Date',
                        'From',
                        'Transaction No.',
                        'To',
                        'Transaction No.'
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
                            'name' => 'amount',
                            'index' => 'amount',
                            'width' => 200,
                            'editable' => false,
                        ),
                        array(
                            'name' => 'date',
                            'index' => 'date',
                            'width' => 200,
                            'editable' => true
                        ),
                        array(
                            'name' => 'from_transaction_type_id',
                            'index' => 'from_transaction_type_id',
                            'width' => 300,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'from_transaction_no',
                            'index' => 'from_transaction_no',
                            'width' => 100,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'to_transaction_type_id',
                            'index' => 'to_transaction_type_id',
                            'width' => 300,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'to_transaction_no',
                            'index' => 'to_transaction_no',
                            'width' => 100,
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
