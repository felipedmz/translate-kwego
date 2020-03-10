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
    }
}
