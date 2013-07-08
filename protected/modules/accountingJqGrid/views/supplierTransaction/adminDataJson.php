<?php

$asSupplier = array();
foreach ($suppliers as $supplier) {
    if ($supplier->is_tax_included == '1') {
        $taxed = "Yes";
    } else {
        $taxed = "No";
    }
    $date = new DateTime($supplier->date);
    $overdue = new DateTime($supplier->overdue_date);
    $temp = array(
        'id' => $supplier->id,
        'cell' => array(
            $supplier->id,
            $supplier->transactionType->name,
            $supplier->supplier->name,
            $supplier->reference,
            $supplier->supplier_reference,
            $date->format("d-m-Y"),
            $overdue->format("d-m-Y"),
            number_format($supplier->overdue_amount, 2, '.', ','),
            number_format($supplier->overdue_discount, 2, '.', ','),
            number_format($supplier->overdue_goods_and_service_tax, 2, '.', ','),
            number_format($supplier->rate, 2, '.', ','),
            number_format($supplier->allocation, 2, '.', ','),
            $taxed
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
