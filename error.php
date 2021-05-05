<?php

function divByZero($event, $context) 
{
    echo 1/0;

    return [
        'status' => 500,
        'data' => 'NOT_OK',
    ];
}

function classNotFound($event, $context) 
{
    $instance = new NotExistingClass();

    return [
        'status' => 500,
        'data' => 'NOT_OK',
    ];
}
