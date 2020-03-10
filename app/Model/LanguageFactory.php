<?php namespace App\Model;

use App\Domain\Kwego;
use App\Exceptions\LanguageNotMappedException;

class LanguageFactory
{
    public static function load(string $origin, string $target)
    {
        if (strtolower($origin) == "kwego" && strtolower($target) == "hinduarabic")
            return Kwego::HINDUARABIC;
        //
        throw new LanguageNotMappedException();
    }
}
