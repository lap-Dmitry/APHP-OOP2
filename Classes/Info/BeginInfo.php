<?php
declare(strict_types=1);

namespace Classes\Info;

class  BeginInfo
{
    public function getBeginInfo( $human): string {
        return $human->getFullName()
            . $human->getProfession(). ', зарплата: '
            . $human->getSalary(). ' попугаев, '. $human->moreInfo() . '<br>';
    }
}

