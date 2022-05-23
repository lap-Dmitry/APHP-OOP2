<?php

namespace Classes\Company;

use Classes\Person;

class Director extends Person implements LeadInterface
{
    public function getFullName(): string
    {
        return "$this->name $this->surName, ";
    }

    public function getProfession(): string
    {
        return "позиция: $this->profession";
    }

    public function moreInfo(): string
    {
        return "может управлять/руководить.". PHP_EOL;
    }

    public function getSalary(): int
    {
        return 100;
    }
}