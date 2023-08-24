<?php

namespace Duartebv\Poo\models;


class VideoPost extends Post implements IPost
{

    public function __construct(private string $message, private string $video)
    {
        parent::__construct($message);
    }

    public function getVideo(): string
    {
        return $this->video;
    }

    public function toString(): string
    {
        $info = "id: {$this->getId()} \n";
        $info .= "Mensaje: {$this->getMessage()} \n";
        $info .= "Video: {$this->getVideo()} \n";
        $info .= "Likes: " . count($this->getLikes()) . "\n\n";
        return $info;
    }
}
