<?php


namespace Service\SocialNetwork;


class Twitter
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function sendTwitter(string $text)
    {
        echo "Отправляем твит $text";
    }



}