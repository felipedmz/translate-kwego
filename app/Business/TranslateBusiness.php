<?php namespace App\Business;

use App\Domain\Translate;
use App\Model\TranslateModel;

class TranslateBusiness
{
    public static function kwegoToHinduArabic(string $needTranslate) 
    {
        $translateDomain = new Translate();
        $translateDomain->setValue($needTranslate);
        $translateDomain->setLanguageOrigin("kwego");
        $translateDomain->setLanguageTarget("hinduArabic");
        $translateModel = new TranslateModel();
        return $translateModel->stringToNumber($translateDomain);
    }
}