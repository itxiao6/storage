<?php
namespace Itxiao6\Storage;

/**
 * Interface Storage
 * @package Itxiao6\Storage
 */
/**
 * Class Storage
 * @package Itxiao6\Storage
 */
abstract class Storage
{
    public function __call($name, $arguments)
    {
//        TODO 装饰者模式
    }
    public static function __callStatic($name, $arguments)
    {
        return (new static()) -> $name(...$arguments);
    }
}