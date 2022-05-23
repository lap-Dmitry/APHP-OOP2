<?php

namespace Classes\Company;

use Classes\Person;

class Employee extends Person implements WebinarSpeakerInterface
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
        return "может проводить вебинары: на психологические темы.". PHP_EOL;
    }

    public function getSalary(): int
    {
        return 30;
    }
}