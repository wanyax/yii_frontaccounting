<?php

$asCustomerhead = array();
foreach ($customerheads as $customerhead) {
    if ($customerhead->is_active == '1') {
        $active = "Yes";
    } else {
        $active = "No";
    }
    $temp = array(
        'id' => $customerhead->id,
        'cell' => array(
            $customerhead->id,
            $customerhead->name,
            $customerhead->reference,
            $customerhead->physical_address,
            $customerhead->mailing_address,
            $customerhead->goods_and_services_tax_no,
            $customerhead->currency->code,
            $customerhead->salesType->name,
            $customerhead->dimension1->name,
            $customerhead->dimension2->name,
            $customerhead->creditStatus->name,
            $customerhead->paymentTerm->name,
            number_format($customerhead->discount, 2, '.', ','),
            number_format($customerhead->payment_discount, 2, '.', ','),
            number_format($customerhead->credit_limit, 2, '.', ','),
            $customerhead->note,
            $active
        ),
    );
    $asCustomerhead[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asCustomerhead,
);

echo json_encode($json);
