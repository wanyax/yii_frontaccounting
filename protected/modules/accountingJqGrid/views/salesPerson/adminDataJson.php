<?php

$asSalesperson = array();
foreach ($salespersons as $salesperson) {
    if ($salesperson->is_active === '1') {
        $active = "Yes";
    } else {
        $active = "No";
    }
    $temp = array(
        'id' => $salesperson->id,
        'cell' => array(
            $salesperson->id,
            $salesperson->name,
            $salesperson->phone,
            $salesperson->fax,
            $salesperson->email,
            $salesperson->provision,
            $salesperson->provision2,
            $salesperson->break_point,
            $active
        ),
    );
    $asSalesperson[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asSalesperson,
);

echo json_encode($json);
