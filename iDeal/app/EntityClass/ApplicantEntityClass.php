<?php

namespace iDeal\App\EntityClass;

/**
 * Class representing an applicant entity with relevant properties.
 */

class ApplicantEntityClass
{
    private string $name;
    private int $address;
    private string $email;

    public function __construct(string $name, int $address, string $email)
    {
        $this->name = $name;
        $this->address = $address;
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAddress(): int
    {
        return $this->address;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'address' => $this->address,
            'email' => $this->email,
        ];
    }   
}




