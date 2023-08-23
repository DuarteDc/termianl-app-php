<?php

namespace Duartebv\Poo\models;

class ImagePost extends Post
{
    public function __construct(private string $message, private string $image)
    {
        parent::__construct($message);
    }

    public function getImage(): string
    {
        return $this->image;
    }
}
