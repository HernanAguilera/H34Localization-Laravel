<?php

namespace H34\Localization\Models;

use H34\Core\Models\ModelContract;

class City implements ModelContract
{
    public static function getFields(): array {
        return [];
    }

    public static function getHiddenFields(): array
    {
        return [
            
        ];
    }
}