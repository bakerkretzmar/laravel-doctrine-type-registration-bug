<?php

namespace App\Support;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

class XmlType extends Type
{
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return 'xml';
    }

    public function getName()
    {
        return 'xml';
    }

    // public function getMappedDatabaseTypes(AbstractPlatform $platform)
    // {
    //     return ['geometry'];
    // }
}
