<?php

$data = array(
    1,
    2,
    3,
);

$count = count( $data );
for ( $i = 0; $i < $count; $i++ )
{
    for ( $j = 0; $j < $data[$i]; $j++ )
    {
        echo "{$i}.{$j} " . $i * $j . "<br/>";
    }
}
echoMessage('Szewka');

function echoMessage($message)
{
    echo $message;
    return true;
}