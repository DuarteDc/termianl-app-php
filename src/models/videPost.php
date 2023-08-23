<?php

namespace Duartebv\Poo\models;

class VideoPost extends Post
{

    public function __construct(private string $message, private string $video)
    {
        parent::__construct($message);
    }

    public function getVideo(): string
    {
        return $this->video;
    }
}
