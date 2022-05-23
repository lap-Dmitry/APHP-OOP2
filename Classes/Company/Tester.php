<?php

namespace Classes\Company;

use Classes\Person;

class Tester extends Person implements ApplicationCreatorInterface
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
        return "может заниматься разработкой приложения: пишет тесты". PHP_EOL;
    }

    public function getSalary(): int
    {
        return 70;
    }
}
