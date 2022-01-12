<?php

class User
{
    private string $name;
    private string $email;
    private int $role;


    public function __construct(string $name, string $email, int $role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }


    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getRole(): int
    {
        return $this->role;
    }


    public function setRole(int $role): void
    {
        $this->role = $role;
    }

    public function getInfor()
    {
        return "Name: " . $this->name . "<br/>Email: " . $this->email . "<br/>";
    }

    public function isAdmin()
    {
        if ($this->role == 1) {
            echo $this->getInfor() . "là admin";
        } elseif ($this->role == 2) {
            echo $this->getInfor()."là người dùng bình thường";
        }
    }
}