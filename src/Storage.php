<?php
namespace Itxiao6\Storage;
/**
 * Class Storage
 * @package Itxiao6\Storage
 */
abstract class Storage
{
    /**
     * @param $name
     * @param $arguments
     * @return mixed|\Itxiao6\Storage\Disk\Interfaces
     */
    public function __call($name, $arguments)
    {
//        TODO 装饰者模式
//        return new self();
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed|\Itxiao6\Storage\Disk\Interfaces
     */
    public static function __callStatic($name, $arguments)
    {
        return (new static()) -> $name(...$arguments);
    }
}