<?php

namespace xltxlm\fileinfo;

/**
 * 文件的基本操作方式;
 */
class Fileinfo extends Fileinfo\Fileinfo_implements
{
    private $stat = [];


    public function setFilepath(string $Filepath)
    {
        //如果是网址的话，那么通过网址分析，只取出路径部分当做文件路径，这样处理出来的名字，后缀名才能正确
        if (strpos($Filepath, "//") !== false) {
            $parse_url = parse_url($Filepath);
            $Filepath = $parse_url['path'];
        }
        $pathinfo = pathinfo($Filepath);
        //确保文件的后缀名都是小写的
        $this->Extension = strtolower($pathinfo['extension']);
        $this->Filename_no_Extension = $pathinfo['filename'];
        $this->Dirname = $pathinfo['dirname'];
        $this->Filename_and_Extension = $pathinfo['basename'];
        $this->Exists = is_file($Filepath);
        $this->Filesize = filesize($Filepath);
        $this->ExistsEmpty = $this->Exists && $this->Filesize == 0;
        return parent::setFilepath($Filepath);
    }

    public function getRealpath(): string
    {
        return realpath($this->getFilepath());
    }


    /**
     * @return array
     */
    public function getStat(): array
    {
        return $this->stat ?: stat($this->getFilepath());
    }


    public function getFilemtime(): string
    {
        return $this->getStat()['mtime'];
    }

    public function Unlink()
    {
        $return = unlink($this->getFilepath());
        $this->Reload();
        return $return;
    }


    public function Reload()
    {
        $this->stat = [];
        $this->setFilepath($this->getFilepath());
    }


    public function Touch()
    {
        $out = [];
        $return = null;
        exec("mkdir -p {$this->getDirname()}", $out, $return);
        if ($return) {
            throw new \Exception("创建文件夹:[{$this->getDirname()}]失败:" . join($out));
        }
        $out = [];
        exec("touch {$this->getFilepath()}", $out, $return);
        if ($return) {
            throw new \Exception("创建文件:[{$this->getFilepath()}]失败:" . join($out));
        }
        $this->Reload();
    }


}