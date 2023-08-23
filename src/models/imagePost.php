<?php

namespace Duartebv\Poo\models;

class ImagePost extends Post implements IPost
{
    public function __construct(private string $message, private string $image)
    {
        parent::__construct($message);
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function toString(): string
    {
        $info = "id: {$this->getId()} \n";
        $info .= "Mensaje: {$this->getMessage()} \n";
        $info .= "Imagen: {$this->getImage()} \n";
        $info .= "Likes: " . count($this->getLikes()) . "\n\n";
        return $info;
    }
}
