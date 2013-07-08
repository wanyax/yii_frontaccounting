<?php

$asSupplier = array();
foreach ($suppliers as $supplier) {
    if ($supplier->is_tax_included == '1') {
        $taxed = "Yes";
    } else {
        $taxed = "No";
    }
    if ($supplier->is_active == '1') {
        $active = "Yes";
    } else {
        $active = "No";
    }
    $temp = array(
        'id' => $supplier->id,
        'cell' => array(
            $supplier->id,
            $supplier->name,
            $supplier->reference,
            $supplier->mailing_address,
            $supplier->physical_address,
            $supplier->goods_and_service_tax_no,
            $supplier->contact,
            $supplier->account_no,
            $supplier->website,
            $supplier->bank_account,
            $supplier->currency->code,
            $supplier->paymentTerm->name,
            $taxed,
            $supplier->dimension1->name,
            $supplier->dimension2->name,
            $supplier->taxGroup->name,
            $supplier->credit_limit,
            $supplier->purchaseAccount->name,
            $supplier->payableAccount->name,
            $supplier->paymentDiscountAccount->name,
            $supplier->note,
            $active
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
