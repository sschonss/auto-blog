<?php

namespace Schons\Src\HtmlPage;

abstract Class HtmlPage
{
    private $title;
    public function __construct($title)
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getHtmlHeader(): string
    {
        return "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>{$this->getTitle()}</title>
            {$this->getStyles()}
        </head>
        <body>";
    }

    public function getHtmlFooter(): string
    {
        return "</body>
        </html>";
    }
    abstract public function getHtmlContent(): string;

    public function getHtml(): string
    {
        return $this->getHtmlHeader() . $this->getHtmlContent() . $this->getHtmlFooter();
    }

    public function saveHtml($data, $filename): void
    {
        file_put_contents($filename, $this->getHtml($data));
    }

    abstract public function getStyles(): string;

    public function render(): void
    {
        echo $this->getHtml();
    }
}