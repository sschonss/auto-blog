<?php

namespace Schons\Src\Scrapper;

abstract class Scrapper
{
    protected string $url;

    public function __construct($url)
    {
        $this->url = $url;
    }


    public abstract function scrap() : array;

}