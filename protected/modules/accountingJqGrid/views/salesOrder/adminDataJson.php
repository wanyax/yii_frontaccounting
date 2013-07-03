<?php

$asSalesorder = array();
foreach ($salesorders as $salesorder) {
    $date = new DateTime($salesorder->date);
    $deliveryDate = new DateTime($salesorder->delivery_date);
    $temp = array(
        'id' => $salesorder->id,
        'cell' => array(
            $salesorder->id,
            $salesorder->transactionType->name,
            $salesorder->transaction_no,
            $salesorder->version,
            $salesorder->type,
            $salesorder->customerHead->name,
            $salesorder->customerBranch->name,
            $salesorder->reference,
            $salesorder->customer_reference,
            $salesorder->comment,
            $date->format('d-m-Y'),
            $salesorder->salesType->name,
            $salesorder->shippingCompany->name,
            $salesorder->delivery_address,
            $salesorder->contact_phone,
            $salesorder->contact_email,
            $salesorder->deliver_to,
            $salesorder->freight_cost,
            $salesorder->fromStockLocation->name,
            $deliveryDate->format('d-m-Y'),
            $salesorder->paymentTerm->name,
            $salesorder->total
        ),
    );
    $asSalesorder[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asSalesorder,
);

echo json_encode($json);
