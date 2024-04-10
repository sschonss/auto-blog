<?php

namespace Schons\Src;

class Article
{
    private string $title;
    private string $url;

    public function __construct($title, $url)
    {
        $this->title = $title;
        $this->url = $url;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function setUrl($url): void
    {
        $this->url = $url;
    }

}