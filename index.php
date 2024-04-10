<?php

require __DIR__ . '/vendor/autoload.php';

use Schons\Src\HtmlPage\ArticlesHtmlPage;
use Schons\Src\Scrapper\MediumScrapper;

$url = $_GET['url'] ?? 'https://medium.com/@sschonss';
$title = $_GET['title'] ?? 'Articles';
$filename = strtolower(str_replace(' ', '_', $title) . '.html');

$scrapper = new MediumScrapper($url);
$articles = $scrapper->scrap();

$htmlPage = new ArticlesHtmlPage($title, $articles);
$htmlPage->saveHtml($htmlPage->getHtmlContent(), $filename);
$htmlPage->render();






