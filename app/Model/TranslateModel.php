<?php namespace App\Model;

use App\Domain\Translate;

class TranslateModel
{
    public function stringToNumber(Translate $translate)
    {
        $translate->setTranslateDateTime();
        $translate->setTranslatedValue();
        return $translate;
    }
}