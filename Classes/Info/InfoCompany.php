<?php
declare(strict_types=1);

namespace Classes\Info;

use Classes\Person;

class InfoCompany
{
    public array $people;
    public static int $sumSalary = 0;
    public int $countPeople;
    public object $info;

    public function __construct(array $people, object $info) {
        $this->people = $people;
        $this->info = $info;
        $this->countPeople = count($people);
    }

    public function showInfo(): void {
        foreach ($this->people as $person) {
            if ($person instanceof Person) {
                echo ($this->info->getBeginInfo($person)) .PHP_EOL;
                self::$sumSalary += $person->getSalary();
            }
        }
        echo "Общее количество сотрудников: " . $this->countPeople . "<br>" . "Общая сумма затрат: " . self::$sumSalary;
    }
}
