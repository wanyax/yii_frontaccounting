<?php

$asSalestype = array();
foreach ($salestypes as $salestype) {
    $temp = array(
        'id' => $salestype->id,
        'cell' => array(
            $salestype->id,
            $salestype->name,
            $salestype->is_tax_included,
            $salestype->factor,
            $salestype->is_active
        ),
    );
    $asSalestype[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asSalestype,
);

echo json_encode($json);
