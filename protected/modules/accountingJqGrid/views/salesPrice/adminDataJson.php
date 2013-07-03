<?php

$asSalesprice = array();
foreach ($salesprices as $salesprice) {
    $temp = array(
        'id' => $salesprice->id,
        'cell' => array(
            $salesprice->id,
            $salesprice->stockMaster->description,
            $salesprice->salesType->name,
            $salesprice->currency->code,
            number_format($salesprice->price, 2, '.', ',')
        ),
    );
    $asSalesprice[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asSalesprice,
);

echo json_encode($json);
