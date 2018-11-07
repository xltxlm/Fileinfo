<?php

namespace xltxlm\fileinfo\Features;

use xltxlm\fileinfo\Fileinfo;

/**
 * 根据当前的文件路径,返回相同目录下,带有当前文件名作为前缀的另外一个路径;
 */
class Fileinfo_tmp extends Fileinfo_tmp\Fileinfo_tmp_implements
{
    public function __invoke(): string
    {
        $getFileinfo = (new Fileinfo($this->getFilepath()));
        $i = 0;
        //循环到生成的文件路径是不存在的为止
        while ($i++ < 10) {
            $prex = md5(uniqid());
            $newpath = $getFileinfo->getDirname() . '/' . $prex . '_' . $getFileinfo->getFilename_and_Extension();
            if (is_file($newpath)) {
                continue;
            } else {
                return $newpath;
            }
        }
        throw new \Exception("创建同目录下的唯一文件失败:{$this->getFielPath()}");
    }


}