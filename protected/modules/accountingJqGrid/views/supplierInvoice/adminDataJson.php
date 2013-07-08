<?php

$asInvoice = array();
foreach ($invoices as $invoice) {
    if (isset($invoice->generalLedgerAccount->name)) {
        $generalLedger = $invoice->generalLedgerAccount->name;
    } else {
        $generalLedger = null;
    }
    $temp = array(
        'id' => $invoice->id,
        'cell' => array(
            $invoice->id,
            $invoice->supplierTransaction->supplier->name,
            $invoice->transactionType->name,
            $generalLedger,
            $invoice->description,
            number_format($invoice->quantity, 2, '.', ','),
            number_format($invoice->price_per_unit, 2, '.', ','),
            number_format($invoice->tax_per_unit, 2, '.', ','),
            $invoice->memo
        ),
    );
    $asInvoice[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asInvoice,
);

echo json_encode($json);
