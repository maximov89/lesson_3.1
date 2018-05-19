<?php

function vardump($var) {
  echo '<pre>';
  var_dump($var);
  echo '</pre>';
}

class News
{
    private $title;
    private $body;
    public function getTitle()
    {
        return $this->title;
    }
        public function getBody()
    {
        return $this->body;
    }
        public function __construct($title, $body)
    {
        $this->title = $title;
        $this->body = $body;
    }
}

$news = [
new News('Погода', '......текст.....'),
new News('Политика', '..текст........'),
new News('Спорт', '.....текст.....'),
new News('Культура', '..........текст.'),
new News('Кино', '........текст...')
];