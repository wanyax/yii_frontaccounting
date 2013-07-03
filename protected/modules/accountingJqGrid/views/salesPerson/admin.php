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
                    'names' => array('ID', 'Name', 'Phone', 'Fax', 'Email', 'Provision', 'Provision 2', 'Breakpoint', 'Active'),
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
                            'name' => 'phone',
                            'index' => 'phone',
                            'width' => 300,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'fax',
                            'index' => 'fax',
                            'width' => 300,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'email',
                            'index' => 'email',
                            'width' => 300,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'provision',
                            'index' => 'provision',
                            'width' => 300,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'provision2',
                            'index' => 'provision2',
                            'width' => 300,
                            'editable' => true,
                        ),
                         array(
                            'name' => 'break_point',
                            'index' => 'break_point',
                            'width' => 300,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'is_active',
                            'index' => 'is_active',
                            'width' => 300,
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
