<?php

namespace Duartebv\Poo\models;

use Duartebv\Poo\utils\UUID;

class User
{

    private string $id;
    private array $posts;
    private array $followers;


    public function __construct(private string $name, private string $username, private string $email, private string $password)
    {
        $this->id = UUID::generate();
        $this->posts = [];
        $this->followers = [];
    }

    public function getId()
    {
        return $this->id;
    }

    public function publish(Post $post)
    {
        array_push($this->posts, $post);
    }

    public function getPost(): array
    {
        return $this->posts;
    }

    public function showPost()
    {
        foreach ($this->posts as $post) {
            var_dump($post->toString());
        }
    }


    private function hasFollowers(User $user)
    {
        $found = array_filter($this->followers, fn (User $follower) => $follower->id === $user->id);

        return count($found) === 1;
    }
}
