<?php

$asPrice = array();
foreach ($prices as $price) {
    $temp = array(
        'id' => $price->id,
        'cell' => array(
            $price->id,
            $price->supplier->name,
            number_format($price->price, 2, '.', ','),
            $price->supplierMeasureUnit->name,
            $price->conversion_factor,
            $price->supplier_description
        ),
    );
    $asPrice[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asPrice,
);

echo json_encode($json);
