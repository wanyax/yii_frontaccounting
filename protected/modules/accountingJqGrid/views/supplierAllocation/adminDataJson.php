<?php

$asSupplier = array();
foreach ($suppliers as $supplier) {
    $date = new DateTime($supplier->date);
    $temp = array(
        'id' => $supplier->id,
        'cell' => array(
            $supplier->id,
            number_format($supplier->amount, 2, '.', ','),
            $date->format("d-m-Y"),
            $supplier->fromTransactionType->name,
            $supplier->from_transaction_no,
            $supplier->toTransactionType->name,
            $supplier->to_transaction_no
        ),
    );
    $asSupplier[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asSupplier,
);

echo json_encode($json);
