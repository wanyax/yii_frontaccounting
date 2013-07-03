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
                    'names' => array('ID',
                        'Name',
                        'Reference',
                        'Address',
                        'Mail Address',
                        'Goods & Service Tax',
                        'Currency',
                        'Sales Type',
                        'Dimension 1',
                        'Dimension 2',
                        'Credit Status',
                        'Terms of Payment',
                        'Disc.',
                        'Payment Disc.',
                        'Limit of Credit',
                        'Note',
                        'Active'
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
                            'name' => 'name',
                            'index' => 'name',
                            'width' => 300,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'reference',
                            'index' => 'reference',
                            'width' => 300,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'physical_address',
                            'index' => 'physical_address',
                            'width' => 300,
                            'editable' => true,
                            'edittype' => 'textarea'
                        ),
                        array(
                            'name' => 'mailing_address',
                            'index' => 'mailing_address',
                            'width' => 300,
                            'editable' => true,
                            'edittype' => 'textarea'
                        ),
                        array(
                            'name' => 'goods_and_services_tax_no',
                            'index' => 'goods_and_services_tax_no',
                            'width' => 100,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'currency_id',
                            'index' => 'currency_id',
                            'width' => 100,
                            'editable' => false,
                        ),
                        array(
                            'name' => 'sales_type_id',
                            'index' => 'sales_type_id',
                            'width' => 100,
                            'editable' => false,
                        ),
                        array(
                            'name' => 'dimension1_id',
                            'index' => 'dimension1_id',
                            'width' => 200,
                            'editable' => false,
                        ),
                        array(
                            'name' => 'dimension2_id',
                            'index' => 'dimension2_id',
                            'width' => 200,
                            'editable' => false,
                        ),
                        array(
                            'name' => 'credit_status_id',
                            'index' => 'credit_status_id',
                            'width' => 300,
                            'editable' => false,
                        ),
                        array(
                            'name' => 'payment_term_id',
                            'index' => 'payment_term_id',
                            'width' => 300,
                            'editable' => false,
                        ),
                        array(
                            'name' => 'discount',
                            'index' => 'discount',
                            'width' => 100,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'payment_discount',
                            'index' => 'payment_discount',
                            'width' => 100,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'credit_limit',
                            'index' => 'credit_limit',
                            'width' => 100,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'note',
                            'index' => 'note',
                            'width' => 300,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'is_active',
                            'index' => 'is_active',
                            'width' => 100,
                            'editable' => true,
                            'edittype' => 'select',
                            'editoptions' => array('value' => '0:No; 1:Yes;'),
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
