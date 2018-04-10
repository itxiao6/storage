<?php
include_once('./vendor/autoload.php');


//# 写入文件
//\Itxiao6\Storage\Storage::derver('Local') -> put('filename.txt','aaaa');

//# 读取文件
//var_dump(\Itxiao6\Storage\Storage::derver('Local') -> get('filename.txt'));
# 获取文件列表
//var_dump(\Itxiao6\Storage\Storage::derver('Local') -> lists());
# 获取文件列表内容
var_dump(\Itxiao6\Storage\Storage::derver('Local') -> get(\Itxiao6\Storage\Storage::derver('Local') -> lists()));