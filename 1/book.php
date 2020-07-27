<?php
require 'author.php';
require 'publisher.php';
class book{
    public $title;
    public $author;
    public $publisher;
    function __construct($title, $author, $publisher)
    {
        $this->title=$title;
        $this->author=$author;
        $this->publisher=$publisher;
    }

}