<?php

include_once './autoload.php';

include 'Classes\Interfaces\ApplicationCreatorInterface.php';
include 'Classes\Interfaces\LeadInterface.php';
include 'Classes\Interfaces\WebinarSpeakerInterface.php';


use Classes\Info\InfoCompany;
use Classes\Info\BeginInfo;
use Classes\Company\Director;
use Classes\Company\Employee;
use Classes\Company\Manager;
use Classes\Company\Programmer;
use Classes\Company\Tester;


$info = new BeginInfo();

$people[] = new Director('Иван', 'Иванов', 'директор');
$people[] = new Employee('Олег', 'Петров', 'сотрудник');
$people[] = new Manager('Вася', 'Пряткин', 'менеджер');
$people[] = new Programmer('Петя', 'Дысенков', 'программист');
$people[] = new Tester('Андрей', 'Районов', 'тестировщик');

$infoCompany = new InfoCompany($people, $info);

$infoCompany->showInfo();