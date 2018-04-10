<?php
namespace Itxiao6\Storage;
/**
 * Class Storage
 * @package Itxiao6\Storage
 */
class Storage
{
    /**
     * @var string
     */
    protected $derver = 'Local';
    /**
     * @param $name
     * @param $arguments
     * @return mixed|\Itxiao6\Storage\Disk\Interfaces
     */
    public function __call($name, $arguments)
    {
        $class = '\Itxiao6\Storage\Disk\\'.$this -> derver;
        return (new $class) -> $name(...$arguments);
    }

    /**
     * 设置驱动
     * @param $name
     * @return $this
     */
    public function set_derver($name = '')
    {
        $this -> derver = $name;
        return $this;
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed|\Itxiao6\Storage\Disk\Interfaces
     */
    public static function __callStatic($name, $arguments)
    {
        if($name == 'derver'){
            return (new static()) -> set_derver(...$arguments);
        }
        return (new static()) -> $name(...$arguments);
    }
}