<?php


namespace Service\SocialNetwork;

use Service\SocialNetwork\Twitter;


class TwitterAdapter implements SocialNetworkPublisher
{
   private $text;

   public function __construct(Twitter $text)
   {
      $this->text = $text;
   }

   public function publisher(): void
   {
       $this->text->sendTwitter($this);
   }

}