<?php

$asFiscal = array();
foreach ($fiscals as $fiscal) {
    $begin = new DateTime($fiscal->begin);
    $end = new DateTime($fiscal->end);
    $temp = array(
        'id' => $fiscal->id,
        'cell' => array(
            $fiscal->id,
            $begin->format('d-m-Y'),
            $end->format('d-m-Y'),
            $fiscal->is_closed
        ),
    );
    $asFiscal[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asFiscal,
);

echo json_encode($json);
