<?php

namespace Makhnanov\Telegram81\Api\Enumeration;

use Makhnanov\PhpEnum\UpgradedEnumInterface;
use Makhnanov\PhpEnum\EnumExtension;

enum ChatType implements UpgradedEnumInterface
{
    use UpgradeEnum;

    case private;
    case group;
    case supergroup;
    case channel;
}
