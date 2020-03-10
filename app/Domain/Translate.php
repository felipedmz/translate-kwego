<?php namespace App\Domain;

class Translate
{
    private $value;
    private $translatedValue;
    private $languageOrigin;
    private $languageTarget;
    private $translateDateTime;

    public function setValue($value) {
        $this->value = $value;
    }

    public function getValue() {
        return $this->value;
    }

    public function setTranslatedValue($translatedValue)
    {
        $this->translatedValue = $translatedValue;
    }

    public function getTranslatedValue()
    {
        return $this->translatedValue;
    }

    public function setLanguageOrigin($languageOrigin)
    {
        $this->languageOrigin = $languageOrigin;
    }

    public function getLanguageOrigin()
    {
        return $this->languageOrigin;
    }

    public function setLanguageTarget($languageTarget) 
    {
        $this->languageTarget = $languageTarget;
    }

    public function getLanguageTarget() 
    {
        return $this->languageTarget;
    }

    public function setTranslateDateTime(): void
    {
        $this->translateDateTime = date("Y-m-d h:i:s");
    }

    public function getTranslateDateTime(): string
    {
        return $this->$translateDateTime;
    }

    public function toArray() {
        return get_object_vars($this);
    }
}