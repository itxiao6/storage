<?php
namespace Itxiao6\Storage\Disk;

/**
 * Interface Interfaces
 * @package Itxiao6\Storage\Disk
 */
interface Interfaces
{
    /**
     * 获取接口
     * @return mixed
     */
    public function getInterFaces();

    /**
     * 获取当前磁盘所有文件
     * @return mixed
     */
    public function lists();

    /**
     * 设置配置
     * @return mixed
     */
    public function config();

    /**
     * 写入文件
     * @return mixed
     */
    public function put();

    /**
     * 获取文件
     * @return mixed
     */
    public function get();

    /**
     * 文件是否存在
     * @return mixed
     */
    public function exists();
}