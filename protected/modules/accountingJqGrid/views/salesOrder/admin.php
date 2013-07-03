<?php
/* @var $this BankAccountController */
/* @var $model BankAccount */

/*$this->breadcrumbs=array(
	'Bank Accounts'=>array('index'),
	'Manage',
);*/
$this->widget(
    'ext.JqGrid.JqGrid',
    array(
        'gridId' => 'demo-grid',
        'pagerId' => 'demo-pager',
        'gridOptions' => array(
            'grid' => array(  // new param
                'geo' => array(
                    'height' => 'auto',
                    'width' => 1000,
                ),
                'column' => array(
                    'names' => array(
									'ID',
									'Transaction Type',
									'Transaction No.',
									'Version',
									'Type',
									'Customer Head',
									'Customer Branch',
									'Reference',
									'Customer Reference',
									'Comment',
									'Date',
									'Sales Type',
									'Shipping Company',
									'Delivery Address',
									'Contact Phone',
									'Contact Email',
									'Deliver to',
									'Freight Cost',
									'Stock Location',
									'Delivery Date',
									'Payment Term',
									'Total'
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
                            'width' => 200,
                            'editable' => true,
                        ),
						array(
                            'name' => 'transaction_no',
                            'index' => 'transaction_no',
                            'width' => 100,
                            'editable' => true
                        ),
						array(
                            'name' => 'version',
                            'index' => 'version',
                            'width' => 100,
                            'editable' => true
                        ),
						array(
                            'name' => 'type',
                            'index' => 'type',
                            'width' => 100,
                            'editable' => true
                        ),
						array(
                            'name' => 'customer_head_id',
                            'index' => 'customer_head_id',
                            'width' => 200,
                            'editable' => true
                        ),
						array(
                            'name' => 'customer_branch_id',
                            'index' => 'customer_branch_id',
                            'width' => 200,
                            'editable' => true
                        ),
						array(
                            'name' => 'reference',
                            'index' => 'reference',
                            'width' => 100,
                            'editable' => true
                        ),
						array(
                            'name' => 'customer_reference',
                            'index' => 'customer_reference',
                            'width' => 100,
                            'editable' => true
                        ),
						array(
                            'name' => 'comment',
                            'index' => 'comment',
                            'width' => 200,
                            'editable' => true,
							'edittype' => 'textarea'
                        ),
						array(
                            'name' => 'date',
                            'index' => 'date',
                            'width' => 100,
                            'editable' => false
                        ),
						array(
                            'name' => 'sales_type_id',
                            'index' => 'sales_type_id',
                            'width' => 200,
                            'editable' => false
                        ),
						array(
                            'name' => 'shipping_company_id',
                            'index' => 'shipping_company_id',
                            'width' => 200,
                            'editable' => true
                        ),
						array(
                            'name' => 'delivery_address',
                            'index' => 'delivery_address',
                            'width' => 200,
                            'editable' => true,
							'edittype' => 'textarea'
                        ),
						array(
                            'name' => 'contact_phone',
                            'index' => 'contact_phone',
                            'width' => 100,
                            'editable' => true
                        ),
						array(
                            'name' => 'contact_email',
                            'index' => 'contact_email',
                            'width' => 100,
                            'editable' => true
                        ),
						array(
                            'name' => 'deliver_to',
                            'index' => 'deliver_to',
                            'width' => 200,
                            'editable' => true,
							'edittype' => 'textarea'
                        ),
						array(
                            'name' => 'freight_cost',
                            'index' => 'freight_cost',
                            'width' => 100,
                            'editable' => true
                        ),
						array(
                            'name' => 'from_stock_location_id',
                            'index' => 'from_stock_location_id',
                            'width' => 100,
                            'editable' => false
                        ),
						array(
                            'name' => 'delivery_date',
                            'index' => 'delivery_date',
                            'width' => 100,
                            'editable' => true
                        ),
						array(
                            'name' => 'payment_term_id',
                            'index' => 'payment_term_id',
                            'width' => 100,
                            'editable' => true
                        ),
						array(
                            'name' => 'total',
                            'index' => 'total',
                            'width' => 100,
                            'editable' => true
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