<?php
namespace Itxiao6\Storage\Disk;

/**
 * 本地存储磁盘
 * Class Local
 * @package Itxiao6\Storage\Disk
 */
class Local implements Interfaces
{
    /**
     * 当前磁盘的对象(用于单例)
     * @var array
     */
    protected static $disk = [];
    /**
     * 当前的目录路径
     * @var string
     */
    protected $path = __DIR__;

    /**
     * 获取接口
     * @return mixed|void
     */
    function getInterFaces()
    {
        // TODO: Implement getInterFaces() method.
    }

    /**
     * 获取文件
     * @param $name
     * @return array|bool|mixed|string
     */
    function get($name)
    {
        if(is_array($name) && count($name) > 1){
            $files = [];
            foreach ($name as $key=>$item){
                $files[] = $this -> get($item);
            }
            return $files;
        }else{
            return file_get_contents(rtrim(rtrim($this -> path,'\\'),'/').DIRECTORY_SEPARATOR.$name);
        }
    }

    /**
     * 写入文件
     * @param $name
     * @param $content
     * @return bool|int|mixed
     */
    function put($name,$content)
    {
        return file_put_contents(rtrim(rtrim($this -> path,'\\'),'/').DIRECTORY_SEPARATOR.$name,$content);
    }
    function lists()
    {
        $files = [];
        $dir = opendir(rtrim(rtrim($this -> path,'\\'),'/').DIRECTORY_SEPARATOR);
        while ($row = readdir($dir)){
            if($row != '.' && $row != '..'){
                $files[] = $row;
            }
        }
        return $files;
    }
    function config()
    {
        // TODO: Implement config() method.
    }
    function exists()
    {
        // TODO: Implement exists() method.
    }
}