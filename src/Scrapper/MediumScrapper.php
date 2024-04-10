<?php

namespace Schons\Src\Scrapper;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Schons\Src\Article;
use Symfony\Component\DomCrawler\Crawler;

class MediumScrapper extends Scrapper
{
    /*
     * @throws GuzzleException
     */
    public function scrap() : array
    {
        $client = new Client();
        $response = $client->request('GET', $this->url);
        $html = $response->getBody()->getContents();
        $crawler = new Crawler($html);
        $articles = $crawler->filter('article');

        $articleList = [];
        foreach ($articles as $article) {
            $articleCrawler = new Crawler($article);
            $title = $articleCrawler->filter('h2')->text();
            $url = $articleCrawler->filter('div[role="link"]')->attr('data-href');
            $articleList[] = new Article($title, $url);

        }
        $array = [];
        foreach ($articleList as $article) {
            $array[] = [
                'title' => $article->getTitle(),
                'url' => $article->getUrl()
            ];
        }
        return $array;
    }

    private function formatURL($url): string
    {
        $domain = "https://medium.com";
        //url = "/@sschonss?source=user_profile---------0----------------------------"
        $url = explode('?', $url);
        $url = $url[0];
        return $domain . $url;

    }

}