<?php

class User
{
    private int $id;
    private string $email;
    private string $password;
    private \MongoDB\BSON\Timestamp  $registration_date;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getRegistrationDate(): \MongoDB\BSON\Timestamp
    {
        return $this->registration_date;
    }

    public function setRegistrationDate(\MongoDB\BSON\Timestamp $registration_date): void
    {
        $this->registration_date = $registration_date;
    }
}