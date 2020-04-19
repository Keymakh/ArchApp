<?php


namespace Service\SocialNetwork;


class Facebook implements SocialNetworkPublisher
{
    private $title;

    private $text;

    public function __construct($title, $text)
    {
        $this->title = $title;
        $this->text = $text;
    }

    public function publisher($title, $text): void
    {
        echo "Это заголовок $title";
        echo "А это новость $text";
    }

}