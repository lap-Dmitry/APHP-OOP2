<?php
declare(strict_types=1);

namespace Classes;

abstract class Person
{
    public string $name;
    public string $surName;
    public string $profession;

    public function __construct(string $name, string $surName, string $profession)
    {
        $this->name = $name;
        $this->surName = $surName;
        $this->profession = $profession;
    }

    abstract public function getFullName(): string;
    abstract public function getProfession(): string;
    abstract public function getSalary(): int;
}