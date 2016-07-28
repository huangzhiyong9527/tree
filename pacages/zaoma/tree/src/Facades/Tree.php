<?php
namespace Zaoma\Tree\Facades;

use Illuminate\Support\Facades\Facade;

class Tree extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tree';
    }
}