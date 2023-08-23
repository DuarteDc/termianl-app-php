<?php

namespace Duartebv\Poo\models;

use Duartebv\Poo\utils\UUID;

class Post
{
    private string $id;
    private array $likes;

    public function __construct(private string $message)
    {
        print_r("Se creo un nuevo objeto \n");
        $this->id = UUID::generate();
    }

    protected function saludo()
    {
        return "Hola desde el post con id $this->id";
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id)
    {
        $this->id = $id;
    }

    public function getMessage()
    {
        return $this->message;
    }
}
