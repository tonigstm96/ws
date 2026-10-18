<?php

declare(strict_types=1);

require_once __DIR__ . '/../interfaces/IToJson.php';

class User implements IToJson
{
    private string $name;
    private string $surname;
    private string $password;
    private string $phone;
    private string $email;
    private string $sex;

    public function __construct(
        string $name,
        string $surname,
        string $password,
        string $phone,
        string $email, 
        string $sex
    ) {
        $this->name = $name;
        $this->surname = $surname;
        $this->password = $password;
        $this->phone = $phone;
        $this->email = $email;
        $this->sex = $sex;
    }

     public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getMail(): string
    {
        return $this->email;
    }

    public function setMail(string $email): void
    {
        $this->email = $email;
    }

    public function getSex(): string
    {
        return $this->sex;
    }

    public function setSex(string $sex): void
    {
        $this->sex = $sex;
    }

    public function toJson(): string
    {
        return json_encode(
            [
                'name' => $this->name,
                'surname' => $this->surname,
                'password' => $this->password,
                'phone' => $this->phone,
                'email' => $this->email,
                'sex' => $this->sex,
            ],
        );
    }
}