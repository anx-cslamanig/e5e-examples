<?php

include_once('scripts/train.php');


function main($event, $context)
{
    // payload: {"a": 5, "b": 4}

    var_dump($event);

    $a = $event['data']['a'];
    $b = $event['data']['b'];
    echo 'Print line 1'.PHP_EOL;
    echo 'Print line 2'.PHP_EOL;
    echo 'Print line 3'.PHP_EOL;
    return [
        'status' => 202,
        'response_headers' => [
            'x-custom-response-header-1' => 'This is a custom response header 1',
            'x-custom-response-header-2' => 'This is a custom response header 2',
            'x-custom-response-header-3' => 'This is a custom response header 3',
        ],
        'data' => [
            'sum' => $a + $b,
            'version' => phpversion(),
            'event' => $event,
            'context' => $context,
            'environment' => $_ENV,
        ],
        'bla' => [
            'bli',
            'blu'
        ]
    ];
}

function train($event, $context)
{
    $message = '??';
    $action =  null;
    if (isset($event['data']['action'])) {
        $action = $event['data']['action'];
    } 
    
    switch($action) {
        case 'train_drive':
            $message = trainDrive();
            break;
        case 'train_stop':
            $message = trainStop();
            break;
    }

    return [
        'status' => 200,
        'data' => [
            'message' => $message,
        ],
    ];
}
