<?php namespace App\Model;

use App\Domain\Translate;
use App\Domain\Kwego;
use App\Exceptions\TranslateIncompleteException;

class TranslateModel
{
    public function stringToNumber(Translate $translate)
    {
        $correspondence = LanguageFactory::load(
            $translate->getLanguageOrigin(), 
            $translate->getLanguageTarget()
        );
        $words = explode(" ", $translate->getvalue());
        $sum = 0;
        foreach ($words as $w) {
            if (!isset($correspondence[$w])) throw new TranslateIncompleteException("Palavras nao mapeadas para a linguagem.");
            $sum += $correspondence[$w];
        }
        $translate->setTranslatedValue($sum);
        $translate->setTranslateDateTime();       
        return $translate;
    }
}