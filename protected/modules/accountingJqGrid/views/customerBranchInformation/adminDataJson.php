<?php

$asCustomerbranch = array();
foreach ($customerbranchs as $customerbranch) {
    if (isset($customerbranch->salesAccount->name)) {
        $sales = $customerbranch->salesAccount->name;
    } else {
        $sales = null;
    }
    if ($customerbranch->disable_transaction == '1') {
        $transaction = "No";
    } else {
        $transaction = "Yes";
    }
    if ($customerbranch->is_active == '1') {
        $active = "Yes";
    } else {
        $active = "No";
    }
    $temp = array(
        'id' => $customerbranch->id,
        'cell' => array(
            $customerbranch->id,
            $customerbranch->customerHead->name,
            $customerbranch->name,
            $customerbranch->reference,
            $customerbranch->physical_address,
            $customerbranch->mailing_address,
            $customerbranch->area->name,
            $customerbranch->salesPerson->name,
            $customerbranch->contact_name,
            $customerbranch->defaultLocation->name,
            $customerbranch->taxGroup->name,
            $sales,
            $customerbranch->salesDiscountAccount->name,
            $customerbranch->receivableAccount->name,
            $customerbranch->paymentDiscountAccount->name,
            $customerbranch->defaultShippingCompany->name,
            $transaction,
            $customerbranch->salesSize->name,
            $customerbranch->note,
            $active
        ),
    );
    $asCustomerbranch[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asCustomerbranch,
);

echo json_encode($json);
