<?php

namespace Duartebv\Poo\utils;

class UUID
{
    public static function generate()
    {
        return uniqid();
    }
}
