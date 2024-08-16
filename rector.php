<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Doctrine\Set\DoctrineSetList;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\Symfony\Set\SymfonySetList;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromStrictConstructorRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src',
    ]);
    $rectorConfig->rule(TypedPropertyFromStrictConstructorRector::class);

    $rectorConfig->import(SymfonySetList::ANNOTATIONS_TO_ATTRIBUTES);
    $rectorConfig->import(SymfonySetList::SYMFONY_CODE_QUALITY);

    $rectorConfig->sets([
        SetList::CODE_QUALITY,
        SetList::DEAD_CODE,
        SetList::PHP_83,
        SetList::TYPE_DECLARATION,
        SetList::NAMING,
        SetList::EARLY_RETURN,
        SetList::CODING_STYLE,
        SetList::PRIVATIZATION,
        SetList::STRICT_BOOLEANS,
        SetList::INSTANCEOF,
        LevelSetList::UP_TO_PHP_84
    ]);
};
