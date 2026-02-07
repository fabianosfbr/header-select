<?php

namespace Fabianosfbr\HeaderSelect\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Fabianosfbr\HeaderSelect\HeaderSelect
 */
class HeaderSelect extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Fabianosfbr\HeaderSelect\HeaderSelect::class;
    }
}
