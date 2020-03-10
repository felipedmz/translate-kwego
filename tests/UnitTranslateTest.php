<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

use App\Business\TranslateBusiness;

class UnitTranslateTest extends TestCase
{
    public function testKwegoToHinduArabic()
    {
        $translateDomain = TranslateBusiness::kwegoToHinduArabic("polsx polsx pol jin kil");
        $this->assertEquals($translateDomain->getTranslatedValue(), "2016");

        $translateDomain = TranslateBusiness::kwegoToHinduArabic("jinjin jij kilow");
        $this->assertEquals($translateDomain->getTranslatedValue(), "615");

        $translateDomain = TranslateBusiness::kwegoToHinduArabic("pol pol pol pol kil kil kil");
        $this->assertEquals($translateDomain->getTranslatedValue(), "43");
    }
}
