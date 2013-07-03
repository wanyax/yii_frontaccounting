<?php

$asTaxtype = array();
foreach ($taxtypes as $taxtype) {
    $temp = array(
        'id' => $taxtype->id,
        'cell' => array(
            $taxtype->id,
            $taxtype->name,
            $taxtype->as_exemption,
            $taxtype->is_active
        ),
    );
    $asTaxtype[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asTaxtype,
);

echo json_encode($json);
