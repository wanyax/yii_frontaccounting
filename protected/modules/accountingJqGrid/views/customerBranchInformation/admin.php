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
                        'Customer Head',
                        'Name',
                        'Reference',
                        'Address',
                        'Mail Address',
                        'Area',
                        'Sales',
                        'Contact',
                        'Location',
                        'Tax Group',
                        'Sales GL Account',
                        'Sales Discount GL Account',
                        'Receivable GL Account',
                        'Payment Disc. GL Account',
                        'Shipping',
                        'Transaction',
                        'Sales Size',
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
                            'name' => 'customer_head_id',
                            'index' => 'customer_head_id',
                            'width' => 300,
                            'editable' => false,
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
                            'name' => 'area_id',
                            'index' => 'area_id',
                            'width' => 300,
                            'editable' => false,
                        ),
                        array(
                            'name' => 'sales_person_id',
                            'index' => 'sales_person_id',
                            'width' => 300,
                            'editable' => false,
                        ),
                        array(
                            'name' => 'contact_name',
                            'index' => 'contact_name',
                            'width' => 300,
                            'editable' => false,
                        ),
                        array(
                            'name' => 'default_location_id',
                            'index' => 'default_location_id',
                            'width' => 200,
                            'editable' => false,
                        ),
                        array(
                            'name' => 'tax_group_id',
                            'index' => 'tax_group_id',
                            'width' => 200,
                            'editable' => false,
                        ),
                        array(
                            'name' => 'sales_account_id',
                            'index' => 'sales_account_id',
                            'width' => 200,
                            'editable' => false,
                        ),
                         array(
                            'name' => 'sales_discount_account_id',
                            'index' => 'sales_discount_account_id',
                            'width' => 200,
                            'editable' => false,
                        ),
                        array(
                            'name' => 'receivable_account_id',
                            'index' => 'receivable_account_id',
                            'width' => 200,
                            'editable' => false,
                        ),
                        array(
                            'name' => 'payment_discount_account_id',
                            'index' => 'payment_discount_account_id',
                            'width' => 200,
                            'editable' => false,
                        ),
                        array(
                            'name' => 'default_shipping_company_id',
                            'index' => 'default_shipping_company_id',
                            'width' => 200,
                            'editable' => false,
                        ),
                        array(
                            'name' => 'disable_transaction',
                            'index' => 'disable_transaction',
                            'width' => 100,
                            'editable' => true,
                            'edittype' => 'select',
                            'editoptions' => array('value' => '0:No; 1:Yes;'),
                        ),
                        array(
                            'name' => 'sales_size_id',
                            'index' => 'sales_size_id',
                            'width' => 200,
                            'editable' => false,
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
