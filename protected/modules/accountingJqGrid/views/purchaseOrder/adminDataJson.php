<?php

$asOrder = array();
foreach ($orders as $order) {
    if ($order->is_tax_included == '1') {
        $taxed = "Yes";
    } else {
        $taxed = "No";
    }
    $date = new DateTime($order->date);
    $temp = array(
        'id' => $order->id,
        'cell' => array(
            $order->id,
            $order->supplier->name,
            $order->comment,
            $date->format("d-m-Y"),
            $order->reference,
            $order->requisition_no,
            $order->intoStockLocation->name,
            $order->delivery_address,
            number_format($order->total, 2, '.', ','),
            $taxed
        ),
    );
    $asOrder[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asOrder,
);

echo json_encode($json);
