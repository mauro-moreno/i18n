<?php

namespace I18n;

class I18n implements I18nInterface
{

    private $translators = [];

    public function __construct($translators = [])
    {
        $this->translators = $translators;
    }

    public function getTranslation()
    {
    }

}
