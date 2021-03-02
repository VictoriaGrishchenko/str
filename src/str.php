<?php


namespace Hillel\Str;

class str
{
public static function after ( $value,  $after)
    {
    if (strpos($value, $after) !== false){
        return substr( $value, strpos($value, $after) + strlen ($after));
    } else {
        return $value;
    }
}

public static function afterLast ($value, $afterLast)
{
    if (strpos($value , $afterLast) !== false){
        return substr ($value, strrpos($value, $afterLast) + strlen($afterLast));
    } else {
        return $value;
    }
}
}