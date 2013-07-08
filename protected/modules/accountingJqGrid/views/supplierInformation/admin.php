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
                        'Name',
                        'Reference',
                        'Mail Address',
                        'Physic Address',
                        'Good & Service Tax',
                        'Contact',
                        'Account',
                        'Website',
                        'Bank',
                        'Currency',
                        'Term of Payment',
                        'Tax Included',
                        'Dimension 1',
                        'Dimension 2',
                        'Tax Group',
                        'Credit Limit',
                        'Purchase GL Account',
                        'Payable GL Account',
                        'Payment Disc. GL Account',
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
                            'editable' => false,
                        ),
                        array(
                            'name' => 'reference',
                            'index' => 'reference',
                            'width' => 300,
                            'editable' => true
                        ),
                        array(
                            'name' => 'mailing_address',
                            'index' => 'date',
                            'width' => 300,
                            'editable' => true,
                            'editype' => 'textarea'
                        ),
                        array(
                            'name' => 'physical_address',
                            'index' => 'physical_address',
                            'width' => 100,
                            'editable' => true,
                            'editype' => 'textarea'
                        ),
                        array(
                            'name' => 'goods_and_service_tax_no',
                            'index' => 'goods_and_service_tax_no',
                            'width' => 100,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'contact',
                            'index' => 'contact',
                            'width' => 300,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'account_no',
                            'index' => 'account_no',
                            'width' => 100,
                            'editable' => true
                        ),
                         array(
                            'name' => 'website',
                            'index' => 'website',
                            'width' => 200,
                            'editable' => true
                        ),
                        array(
                            'name' => 'bank_account',
                            'index' => 'bank_account',
                            'width' => 200,
                            'editable' => true
                        ),
                        array(
                            'name' => 'currency_id',
                            'index' => 'currency_id',
                            'width' => 300,
                            'editable' => true
                        ),
                         array(
                            'name' => 'payment_term_id',
                            'index' => 'payment_term_id',
                            'width' => 300,
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
                        array(
                            'name' => 'dimension1_id',
                            'index' => 'dimension2_id',
                            'width' => 300,
                            'editable' => true
                        ),
                        array(
                            'name' => 'dimension2_id',
                            'index' => 'dimension2_id',
                            'width' => 300,
                            'editable' => true
                        ),
                        array(
                            'name' => 'tax_group_id',
                            'index' => 'tax_group_id',
                            'width' => 200,
                            'editable' => true
                        ),
                        array(
                            'name' => 'credit_limit',
                            'index' => 'credit_limit',
                            'width' => 200,
                            'editable' => true
                        ),
                        array(
                            'name' => 'purchase_account_id',
                            'index' => 'purchase_account_id',
                            'width' => 200,
                            'editable' => true
                        ),
                        array(
                            'name' => 'payable_account_id',
                            'index' => 'payable_account_id',
                            'width' => 200,
                            'editable' => true
                        ),
                        array(
                            'name' => 'payment_discount_account_id',
                            'index' => 'payment_discount_account_id',
                            'width' => 200,
                            'editable' => true
                        ),
                        array(
                            'name' => 'note',
                            'index' => 'note',
                            'width' => 300,
                            'editable' => true,
                            'edittype' => 'textarea'
                        ),
                        array(
                            'name' => 'is_active',
                            'index' => 'is_active',
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
