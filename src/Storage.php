<?php
namespace Itxiao6\Storage;

/**
 * Interface Storage
 * @package Itxiao6\Storage
 */

use Itxiao6\Storage\Disk\Qiniu;

/**
 * Class Storage
 * @package Itxiao6\Storage
 */
abstract class Storage
{
    /**
     * @param $name
     * @param $arguments
     * @return \Itxiao6\Storage\Disk\Interfaces
     */
    public function __call($name, $arguments)
    {
//        TODO 装饰者模式
//        return new self();
    }
    public static function __callStatic($name, $arguments)
    {
        return (new static()) -> $name(...$arguments);
    }
}