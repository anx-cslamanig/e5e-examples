<?php

function trainDrive()
{
    return 'Tschuuu Tschuuu';
}

function trainStop()
{
    return 'Pffffff';
}

function test($event, $context)
{
    return [
        'status' => 200,
        'data' => [
            'message' => 'train test',
        ],
    ];
}
