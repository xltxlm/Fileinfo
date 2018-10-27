<?php

namespace xltxlm\fileinfo;

/**
 * 文件的基本操作方式;
 */
class Fileinfo extends Fileinfo\Fileinfo_implements
{
    private $stat = [];

    /**
     * Fileinfo constructor.
     */
    public function __construct(string $Filepath = null)
    {
        if ($Filepath != null) {
            $this->setFilepath($Filepath);
        }
    }


    public function setFilepath(string $Filepath)
    {
        $pathinfo = pathinfo($Filepath);
        $this->Realpath = realpath($Filepath);
        $this->Extension = $pathinfo['extension'];
        $this->Filename_no_Extension = $pathinfo['filename'];
        $this->Dirname = $pathinfo['dirname'];
        $this->Filename_and_Extension = $pathinfo['basename'];
        $this->Exists = is_file($Filepath);
        $this->Filesize = filesize($Filepath);
        $this->ExistsEmpty = $this->Exists && $this->Filesize == 0;
        return parent::setFilepath($Filepath);
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
    }


}