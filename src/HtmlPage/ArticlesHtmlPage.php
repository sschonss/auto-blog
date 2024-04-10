<?php

namespace Schons\Src\HtmlPage;

class ArticlesHtmlPage extends HtmlPage
{
    protected $data;
    public function __construct($title, $data)
    {
        parent::__construct($title);
        $this->data = $data;
    }
    public function getHtmlContent(): string
    {
        $data = $this->data;
        $title = $this->getTitle();
        $html = "<h1>{$title}</h1>";
        $html .= "<ul>";
        foreach ($data as $article) {
            $html .= "<li><a href='{$article['url']}'>{$article['title']}</a></li>";
        }
        $html .= "</ul>";

        return $html;
    }

    public function getStyles(): string
    {
        return "<style>
        body {
            background-color: #222;
            color: #f1f1f1;
            font-family: Arial, sans-serif;
            padding: 20px;
            margin: 0;
        }
        h1 {
            color: #f1f1f1;
            text-align: center;
            margin-top: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        li {
            background-color: #333;
            margin: 10px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.4);
            transition: transform 0.3s;
        }
        li:hover {
            transform: translateY(-5px);
        }
        a {
            color: #f1f1f1;
            text-decoration: none;
            transition: color 0.3s;
        }
        a:hover {
            color: #ff3333;
        }
    </style>";
    }

}